<?php
session_start();
include 'connection.php';


if(!isset($_SESSION['role']) || $_SESSION['role']!="admin"){
    header("Location: login.php");
    exit();
}



if(isset($_POST['add'])){

    $title = $_POST['title'];
    $notice = $_POST['notice'];


    $sql = "INSERT INTO notices(title,notice)
            VALUES('$title','$notice')";


    if(mysqli_query($conn,$sql)){

        echo "<script>
        alert('Notice Added Successfully');
        window.location='admin_dashboard.php';
        </script>";

    }else{

        echo "Error: ".mysqli_error($conn);

    }

}

?>


<!DOCTYPE html>
<html>
<head>

<title>Add Notice</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body class="bg-light">


<div class="container mt-5">

<h2>Add New Notice</h2>


<form method="POST">


<div class="mb-3">

<label>Notice Title</label>

<input type="text" 
name="title" 
class="form-control"
required>

</div>



<div class="mb-3">

<label>Notice Description</label>

<textarea name="notice"
class="form-control"
rows="5"
required></textarea>


</div>



<button name="add" class="btn btn-success">
Add Notice
</button>


<a href="admin_dashboard.php" class="btn btn-secondary">
Back
</a>


</form>


</div>


</body>
</html>