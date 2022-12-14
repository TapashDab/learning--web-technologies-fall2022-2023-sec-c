<?php
session_start();


require_once "../models/Student_model.php";

$username = $_POST['username'];
$password = $_POST['password'];


$user = ['username' => $username, 'password' => $password];

$status = login($user);

if ($username == "" || $password == "") {
    header('location: ../views/login/Login.php?err=null&&msg=abc');
} else if ($status) {
    $_SESSION['valid'] = 'true';
    $_SESSION['username'] = $username;
    header('location:../views/student/student.php');

} else {
    echo "invalid user";
}




?>