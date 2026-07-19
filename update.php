<?php

include 'connection.php';


$id = $_GET['id'];


// Old data show করার জন্য

$sql = "SELECT * FROM students WHERE id=$id";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);



if(isset($_POST['update'])){


$name = $_POST['name'];
$department = $_POST['department'];
$semester = $_POST['semester'];
$cgpa = $_POST['cgpa'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$blood = $_POST['blood_group'];
$guardian = $_POST['guardian_name'];
$guardian_phone = $_POST['guardian_phone'];
$address = $_POST['address'];



$sql2 = "UPDATE students SET

name='$name',
department='$department',
semester='$semester',
cgpa='$cgpa',
phone='$phone',
email='$email',
blood_group='$blood',
guardian_name='$guardian',
guardian_phone='$guardian_phone',
address='$address'

WHERE id=$id";



mysqli_query($conn,$sql2);


header("Location: student_display.php");

}


?>



<!DOCTYPE html>
<html>

<head>

<title>Update Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>


<div class="container mt-5">


<h2>Update Student Profile</h2>


<form method="POST">


Name

<input type="text" 
class="form-control mb-2"
name="name"
value="<?php echo $row['name']; ?>">



Department

<input type="text"
class="form-control mb-2"
name="department"
value="<?php echo $row['department']; ?>">



Semester

<input type="text"
class="form-control mb-2"
name="semester"
value="<?php echo $row['semester']; ?>">



CGPA

<input type="text"
class="form-control mb-2"
name="cgpa"
value="<?php echo $row['cgpa']; ?>">



Phone

<input type="text"
class="form-control mb-2"
name="phone"
value="<?php echo $row['phone']; ?>">



Email

<input type="text"
class="form-control mb-2"
name="email"
value="<?php echo $row['email']; ?>">



Blood Group

<input type="text"
class="form-control mb-2"
name="blood_group"
value="<?php echo $row['blood_group']; ?>">



Guardian Name

<input type="text"
class="form-control mb-2"
name="guardian_name"
value="<?php echo $row['guardian_name']; ?>">



Guardian Phone

<input type="text"
class="form-control mb-2"
name="guardian_phone"
value="<?php echo $row['guardian_phone']; ?>">



Address

<input type="text"
class="form-control mb-2"
name="address"
value="<?php echo $row['address']; ?>">



<button class="btn btn-success" name="update">

Update Profile

</button>


</form>


</div>


</body>
</html>