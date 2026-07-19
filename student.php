<?php
include 'connection.php';


if(isset($_POST['save'])){

    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $cgpa = $_POST['cgpa'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $blood = $_POST['blood'];
    $guardian = $_POST['guardian'];
    $guardian_phone = $_POST['guardian_phone'];
    $address = $_POST['address'];


    $sql = "INSERT INTO students
    (name,student_id,department,semester,cgpa,phone,email,blood_group,guardian_name,guardian_phone,address)

    VALUES
    ('$name','$student_id','$department','$semester','$cgpa','$phone','$email','$blood','$guardian','$guardian_phone','$address')";


    if(mysqli_query($conn,$sql)){
        echo "Student Added Successfully";
    }
    else{
        echo "Error";
    }

}

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

<div class="card-header bg-primary text-white text-center">

<h3>Student Dashboard</h3>

</div>


<div class="card-body">


<form method="POST">


<div class="row">


<div class="col-md-6 mb-3">

<label>Name</label>

<input type="text" name="name" class="form-control">

</div>



<div class="col-md-6 mb-3">

<label>Student ID</label>

<input type="text" name="student_id" class="form-control">

</div>



<div class="col-md-6 mb-3">

<label>Department</label>

<input type="text" name="department" class="form-control">

</div>


<div class="col-md-6 mb-3">

<label>Semester</label>

<input type="text" name="semester" class="form-control">

</div>



<div class="col-md-6 mb-3">

<label>CGPA</label>

<input type="text" name="cgpa" class="form-control">

</div>



<div class="col-md-6 mb-3">

<label>Phone Number</label>

<input type="text" name="phone" class="form-control">

</div>



<div class="col-md-6 mb-3">

<label>Email</label>

<input type="email" name="email" class="form-control">

</div>



<div class="col-md-6 mb-3">

<label>Blood Group</label>

<input type="text" name="blood" class="form-control">

</div>



<div class="col-md-6 mb-3">

<label>Guardian Name</label>

<input type="text" name="guardian" class="form-control">

</div>



<div class="col-md-6 mb-3">

<label>Guardian Phone</label>

<input type="text" name="guardian_phone" class="form-control">

</div>


<div class="col-md-12 mb-3">

<label>Address</label>

<textarea name="address" class="form-control"></textarea>

</div>



</div>


<button class="btn btn-success" name="save">
Save Profile
</button>

<a href="student_display.php" class="btn btn-primary">
View Students
</a>

<a href="logout.php" class="btn btn-danger">
Logout
</a>


</form>


</div>


</div>


</div>


</body>

</html>