<?php
include 'connection.php';

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>

<title>Student List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>

<div class="container mt-5">


<a href="student.php" class="btn btn-primary mb-3">
Add Student
</a>


<table class="table table-bordered">


<tr>

<th>ID</th>
<th>Name</th>
<th>Student ID</th>
<th>Department</th>
<th>Semester</th>
<th>CGPA</th>
<th>Phone</th>
<th>Email</th>
<th>Blood</th>
<th>Guardian</th>
<th>Guardian Phone</th>
<th>Address</th>
<th>Action</th>
</tr>


<?php

while($row=mysqli_fetch_assoc($result)){

?>


<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['student_id']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['semester']; ?></td>

<td><?php echo $row['cgpa']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['blood_group']; ?></td>

<td><?php echo $row['guardian_name']; ?></td>

<td><?php echo $row['guardian_phone']; ?></td>

<td><?php echo $row['address']; ?></td>
<td>
<a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">
Update
</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" 
class="btn btn-danger"
onclick="return confirm('Are you sure you want to delete?');">

Delete

</a>

</td>



</tr>


<?php
}

?>


</table>


</div>

</body>
</html>