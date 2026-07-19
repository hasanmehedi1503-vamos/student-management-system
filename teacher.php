<?php
include 'connection.php';

if(isset($_POST['btn'])){

    $teacher_id = $_POST['teacher_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $room_no = $_POST['room_no'];
    $gender = $_POST['gender'];

    // Photo Upload
    $photo = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($temp, "uploads/teachers/".$photo);

    $sql = "INSERT INTO teachers
    (teacher_id, name, email, phone, department, designation, room_no, gender, photo)
    VALUES
    ('$teacher_id','$name','$email','$phone','$department','$designation','$room_no','$gender','$photo')";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: teacher_display.php");
        exit();
    }else{
        die(mysqli_error($conn));
    }

}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Add Teacher</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container my-5">

<div class="card shadow">

<div class="card-header bg-primary text-white text-center">
<h2>Add Teacher</h2>
</div>

<div class="card-body">

<form method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label class="form-label">Teacher ID</label>
<input type="text" class="form-control" name="teacher_id" placeholder="Enter Teacher ID">
</div>

<div class="mb-3">
<label class="form-label">Teacher Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Teacher Name">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" class="form-control" name="email" placeholder="Enter Email">
</div>

<div class="mb-3">
<label class="form-label">Phone Number</label>
<input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
</div>

<div class="mb-3">
<label class="form-label">Department</label>
<input type="text" class="form-control" name="department" placeholder="Enter Department">
</div>

<div class="mb-3">
<label class="form-label">Designation</label>
<input type="text" class="form-control" name="designation" placeholder="Enter Designation">
</div>

<div class="mb-3">
<label class="form-label">Room No</label>
<input type="text" class="form-control" name="room_no" placeholder="Enter Room Number">
</div>

<div class="mb-3">
<label class="form-label">Gender</label>

<select class="form-select" name="gender">
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
</select>

</div>

<div class="mb-3">
<label class="form-label">Teacher Photo</label>
<input type="file" class="form-control" name="photo">
</div>

<button class="btn btn-primary" name="btn">Add Teacher</button>

<a href="teacher_display.php" class="btn btn-success">
View Teachers
</a>

</form>

</div>

</div>

</div>

</body>
</html>