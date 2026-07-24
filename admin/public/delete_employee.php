<?php
include '../../db.connection/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Delete image from server
    $stmt = $conn->prepare("SELECT image FROM employees WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($image);
    $stmt->fetch();
    $stmt->close();
    
    if ($image && file_exists("uploads/" . $image)) {
        unlink("uploads/" . $image);
    }
    
    // Delete from database
    $stmt = $conn->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: addemployee.php");
?>