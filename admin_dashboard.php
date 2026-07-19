<?php
session_start();
include 'connection.php';

// Admin Login Check
if(!isset($_SESSION['role']) || $_SESSION['role'] != "admin"){
    header("Location: login.php");
    exit();
}

// Total Students
$sql = "SELECT COUNT(*) AS total FROM students";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$total_students = $data['total'];

// Total Teachers
$sql = "SELECT COUNT(*) AS total FROM teachers";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$total_teachers = $data['total'];

// Total Admin
$total_admins = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Admin Dashboard</h2>

    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card bg-primary text-white shadow">
                <div class="card-body text-center">
                    <h1><?php echo $total_students; ?></h1>
                    <h5>Total Students</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card bg-success text-white shadow">
                <div class="card-body text-center">
                    <h1><?php echo $total_teachers; ?></h1>
                    <h5>Total Teachers</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card bg-danger text-white shadow">
                <div class="card-body text-center">
                    <h1><?php echo $total_admins; ?></h1>
                    <h5>Total Admin</h5>
                </div>
            </div>
        </div>

    </div>

    <!-- Notice Board -->
    <div class="card mt-4 shadow">

        <div class="card-header bg-warning">
            <h4>📢 Notice Board</h4>
        </div>

        <div class="card-body">

        <?php

        $sql = "SELECT * FROM notices ORDER BY id DESC";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){
                ?>

                <h5><?php echo $row['title']; ?></h5>

                <p><?php echo $row['notice']; ?></p>

                <hr>

                <?php
            }

        }else{

            echo "<p>No Notice Available.</p>";

        }

        ?>

        </div>

    </div>

    <div class="mt-4">

        <a href="student.php" class="btn btn-primary">
            Manage Students
        </a>

        <a href="teacher.php" class="btn btn-success">
            Manage Teachers
        </a>
        <a href="add_notice.php" class="btn btn-warning">
            Add Notice
        </a>

        <a href="logout.php" class="btn btn-danger">
            Logout
        </a>

    </div>

</div>

</body>
</html>