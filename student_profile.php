<?php
session_start();
include 'connection.php';

if(!isset($_SESSION['student_id']) || $_SESSION['role']!="student"){
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];

$sql = "SELECT * FROM students WHERE student_id='$student_id'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">


<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">
<h3>Student Dashboard</h3>
</div>


<div class="card-body">


<table class="table table-bordered">


<tr>
<th>ID</th>
<td><?php echo $row['id']; ?></td>
</tr>


<tr>
<th>Name</th>
<td><?php echo $row['name']; ?></td>
</tr>


<tr>
<th>Student ID</th>
<td><?php echo $row['student_id']; ?></td>
</tr>


<tr>
<th>Department</th>
<td><?php echo $row['department']; ?></td>
</tr>


<tr>
<th>Semester</th>
<td><?php echo $row['semester']; ?></td>
</tr>


<tr>
<th>CGPA</th>
<td><?php echo $row['cgpa']; ?></td>
</tr>


<tr>
<th>Phone</th>
<td><?php echo $row['phone']; ?></td>
</tr>


<tr>
<th>Email</th>
<td><?php echo $row['email']; ?></td>
</tr>


<tr>
<th>Blood Group</th>
<td><?php echo $row['blood_group']; ?></td>
</tr>


<tr>
<th>Guardian Name</th>
<td><?php echo $row['guardian_name']; ?></td>
</tr>


<tr>
<th>Guardian Phone</th>
<td><?php echo $row['guardian_phone']; ?></td>
</tr>


<tr>
<th>Address</th>
<td><?php echo $row['address']; ?></td>
</tr>


</table>
<!-- Notice Board -->

<div class="card mt-4 shadow">

    <div class="card-header bg-warning">
        <h4>📢 Notice Board</h4>
    </div>


    <div class="card-body">

    <?php

    $notice_sql = "SELECT * FROM notices ORDER BY id DESC";

    $notice_result = mysqli_query($conn,$notice_sql);


    if(mysqli_num_rows($notice_result) > 0){

        while($notice = mysqli_fetch_assoc($notice_result)){

    ?>

        <h5>
            <?php echo $notice['title']; ?>
        </h5>

        <p>
            <?php echo $notice['notice']; ?>
        </p>

        <hr>

    <?php

        }

    }
    else{

        echo "No Notice Available";

    }

    ?>

    </div>

</div>

<a href="logout.php" class="btn btn-danger">
Logout
</a>


</div>

</div>

</div>


</body>
</html>