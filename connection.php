

//$conn = new mysqli("localhost", "root", "", "studentdb");
//if(!$conn){
    //echo "Database connecton Sucessfully";
 //   die(mysqli_error($conn));
//}

<?php

$conn = new mysqli("localhost", "root", "", "studentdb");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>