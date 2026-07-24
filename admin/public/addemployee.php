<?php
include '../../db.connection/db_connection.php'; // DB connection

$edit_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$employee_name = '';
$role = '';
$description = '';
$image = '';

// Fetch data for editing
if ($edit_id > 0) {
    $stmt = $conn->prepare("SELECT employee_id, employee_name, role, description, image FROM employees WHERE id = ?");
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $stmt->bind_result($employee_id, $employee_name, $role, $description, $image);
    $stmt->fetch();
    $stmt->close();
}

// Fetch all employees
$all_employees = $conn->query("SELECT * FROM employees ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $edit_id > 0 ? 'Update Employee' : 'Add Employee' ?> - Admin Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

<div id="wrapper">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Topbar -->
            <?php include 'navbar.php'; ?>
            <!-- End of Topbar -->

            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800"><?= $edit_id > 0 ? 'Update Employee' : 'Add Employee' ?></h1>

                <!-- Success Message -->
                <?php if (isset($_GET['success'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_GET['success'] == 'added' ? 'Employee added successfully!' : 'Employee updated successfully!' ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <!-- Employee Form -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success"><?= $edit_id > 0 ? 'Update Employee' : 'Add Employee' ?></h6>
                    </div>
                    <div class="card-body">
                        <form action="save_employee.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $edit_id ?>">
                            
                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <input type="text" name="employee_name" class="form-control" placeholder="Enter Employee Name"
                                       value="<?= htmlspecialchars($employee_name) ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <input type="text" name="role" class="form-control" placeholder="Enter Role (e.g., Dentist, Web Developer)"
                                       value="<?= htmlspecialchars($role) ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Enter brief description about employee"><?= htmlspecialchars($description) ?></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <?php if ($edit_id > 0 && $image): ?>
                                    <small class="text-muted">Current Image: <img src="uploads/<?= $image ?>" width="50" height="50" style="object-fit:cover;"></small>
                                    <input type="hidden" name="existing_image" value="<?= $image ?>">
                                <?php endif; ?>
                            </div>
                            
                            <button type="reset" class="btn btn-danger">Clear</button>
                            <button type="submit" class="btn btn-success"><?= $edit_id > 0 ? 'Update' : 'Add' ?></button>
                        </form>
                    </div>
                </div>

                <!-- All Employees Table -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Employees</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if ($all_employees && $all_employees->num_rows > 0): ?>
                                    <?php while($row = $all_employees->fetch_assoc()): ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['employee_id'] ?></td>
                                            <td><?= htmlspecialchars($row['employee_name']) ?></td>
                                            <td><?= htmlspecialchars($row['role']) ?></td>
                                            <td>
                                                <?php if ($row['image']): ?>
                                                    <img src="uploads/<?= $row['image'] ?>" width="50" height="50" style="object-fit:cover;">
                                                <?php else: ?>
                                                    <span class="text-muted">No Image</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?= $row['created_at'] ?></td>
                                            <td>
                                                <a href="addemployee.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="delete_employee.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center">No employees added yet.</td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto text-center">
                <span>© 2024 VisionDentalhospital. All Rights Reserved. Designed & Developed by <a href="https://bhavicreations.com/" target="_blank">Bhavi Creations</a></span>
            </div>
        </footer>

    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>