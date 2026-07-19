<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5 mx-5 shadow-lg p-3 mb-5 
    bg-white rounded ">
    <h1 class="text-center shadow-lg p-3 mb-5 
    bg-white rounded">Student Management System</h1>
<button class="btn btn-primary"><a href="Home.
php"class="text-light">Add student</a> </button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Student ID</th>
      <th scope="col">Program</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from  stubl";
    $result = mysqli_query($conn,$sql);
     if($result){
        while($row=mysqli_fetch_assoc($result)){
            $stuid=$row['id'];
            $fname=$row['firstname'];
            $lname=$row['lastname'];
            $email=$row['email'];
            $student_id = $row['student_id'];
            $program=$row['pos'];
            echo ' <tr>
      <th scope="row">'. $stuid.'</th>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$email.'</td>
      <td>'.$student_id.'</td>
      <td>'.$program.'</td>
      <td>
      <button class"btn btn-primary">Update</button>
      <button  class"btn btn-danger">Delete</button>
    </tr>';
        }
     }

?>

  </tbody>
</table>
    </div>
</body>
</html>