<?php
include '../../db.connection/db_connection.php';

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$employee_name = $_POST['employee_name'];
$role = $_POST['role'];
$description = $_POST['description'] ?? '';
$image = '';

// Handle image upload
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $image = time() . '_' . basename($_FILES['image']['name']);
    $target_file = $target_dir . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
} elseif ($id > 0 && isset($_POST['existing_image'])) {
    $image = $_POST['existing_image'];
}

if ($id > 0) {
    // Update
    if ($image) {
        $stmt = $conn->prepare("UPDATE employees SET employee_name=?, role=?, description=?, image=? WHERE id=?");
        $stmt->bind_param("ssssi", $employee_name, $role, $description, $image, $id);
    } else {
        $stmt = $conn->prepare("UPDATE employees SET employee_name=?, role=?, description=? WHERE id=?");
        $stmt->bind_param("sssi", $employee_name, $role, $description, $id);
    }
    $stmt->execute();
    $stmt->close();
    header("Location: addemployee.php?success=updated");
} else {
    // Insert new employee
    $employee_id = 'EMP' . date('Y') . rand(1000, 9999);
    $stmt = $conn->prepare("INSERT INTO employees (employee_id, employee_name, role, description, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $employee_id, $employee_name, $role, $description, $image);
    $stmt->execute();
    $stmt->close();
    header("Location: addemployee.php?success=added");
}
?>