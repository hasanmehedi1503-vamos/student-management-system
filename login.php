<?php
session_start();
include 'connection.php';

if(isset($_POST['login'])){

    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $role = $_POST['role'];

    // Admin
    /*if($role == "admin"){

     $_SESSION['role']="admin";

        //header("Location: Home.php");
         header("Location: student.php");
        exit();

    }*/
        if($role == "admin"){

    $sql = "SELECT * FROM admins
            WHERE admin_id='$student_id'
            AND name='$name'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['admin_id'] = $student_id;
        $_SESSION['admin_name'] = $name;
        $_SESSION['role'] = "admin";

        header("Location: admin_dashboard.php");
        exit();

    }else{

        echo "<script>alert('Invalid Admin Login');</script>";

    }
}

    // Teacher
    elseif($role == "teacher"){

        $sql = "SELECT * FROM teachers WHERE teacher_id='$student_id' AND name='$name'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){

            $_SESSION['teacher_id'] = $student_id;
            $_SESSION['teacher_name'] = $name;

            header("Location: teacher.php");
            exit();

        }else{
            echo "<script>alert('Invalid Teacher Login');</script>";
        }

    }

    // Student
    /*elseif($role == "student"){

        $_SESSION['student_id'] = $student_id;

        //header("Location: student.php");
        header("Location: Home.php");
        exit();*/
        // Student
elseif($role == "student"){

    $sql = "SELECT * FROM students WHERE student_id='$student_id' AND name='$name'";

    $result = mysqli_query($conn,$sql);


    if(mysqli_num_rows($result) > 0){


        $_SESSION['student_id'] = $student_id;
        $_SESSION['student_name'] = $name;
        $_SESSION['role'] = "student";


        header("Location: student_profile.php");
       //header("Location: Home.php");
        exit();


    }
    else{

        echo "<script>alert('Invalid Student Login');</script>";

    }

}

    }

    // Invalid Role
    else{

        echo "<script>alert('Please Select a Role');</script>";

    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header text-center bg-primary text-white">
                    <h3>Student Management System</h3>
                </div>

                <div class="card-body">

                    <form action="" method="POST">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                        </div>

                        <!-- Student ID -->
                        <div class="mb-3">
                            <label class="form-label">Student ID</label>
                            <input type="text" name="student_id" class="form-control" placeholder="Enter Student ID">
                        </div>

                        <!-- Role -->
                        <div class="mb-3">
                            <label class="form-label">Role</label>

                            <select name="role" class="form-select">
                                <option value="">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                            </select>

                        </div>

                        <!-- Button -->
                        <div class="d-grid">
                            <button class="btn btn-primary" name="login">
                                Login
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>