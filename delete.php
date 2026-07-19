<?php

include 'connection.php';


$id = $_GET['id'];


$sql = "DELETE FROM students WHERE id=$id";


$result = mysqli_query($conn,$sql);


if($result){

    header("Location: student_display.php");

}
else{

    echo "Delete Failed";

}


?>