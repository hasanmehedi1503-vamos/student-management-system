<?php
include 'connection.php';

$id = $_GET['id'];

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $room_no = $_POST['room_no'];
    $gender = $_POST['gender'];


    $sql = "UPDATE teachers SET

    name='$name',
    email='$email',
    phone='$phone',
    department='$department',
    designation='$designation',
    room_no='$room_no',
    gender='$gender'

    WHERE id='$id'";


    $result = mysqli_query($conn,$sql);


    if($result){
        header("Location: teacher_display.php");
        exit();
    }

}


// old data show

$sql = "SELECT * FROM teachers WHERE id='$id'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

?>


<form method="POST">

Name:
<input type="text" name="name" 
value="<?php echo $row['name']; ?>"><br>


Email:
<input type="text" name="email"
value="<?php echo $row['email']; ?>"><br>


Phone:
<input type="text" name="phone"
value="<?php echo $row['phone']; ?>"><br>


Department:
<input type="text" name="department"
value="<?php echo $row['department']; ?>"><br>


Designation:
<input type="text" name="designation"
value="<?php echo $row['designation']; ?>"><br>


Room:
<input type="text" name="room_no"
value="<?php echo $row['room_no']; ?>"><br>


Gender:
<input type="text" name="gender"
value="<?php echo $row['gender']; ?>"><br>


<button name="update">
Update Teacher
</button>


</form>