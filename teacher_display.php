<?php
include 'connection.php';

$sql="SELECT * FROM teachers";

$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<a href="teacher.php" class="btn btn-primary mb-3">
Add Teacher
</a>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>Teacher ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Department</th>
<th>Designation</th>
<th>Room</th>
<th>Gender</th>
<th>Photo</th>
<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['teacher_id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['designation']; ?></td>

<td><?php echo $row['room_no']; ?></td>

<td><?php echo $row['gender']; ?></td>

<td>

<img src="uploads/teachers/<?php echo $row['photo']; ?>" width="70">

</td>
<td>

<a href="teacher_update.php?id=<?php echo $row['id']; ?>" 
class="btn btn-warning">

Update

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