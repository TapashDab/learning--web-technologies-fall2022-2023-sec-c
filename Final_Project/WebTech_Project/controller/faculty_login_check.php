<?php
session_start();
require_once "../models/Faculty_model.php";
$username = $_POST['username'];
$password = $_POST['password'];


$user = ['username' => $username, 'password' => $password];

$status = facultylogin($user);

if ($username == "" || $password == "") {
    header('location: ../views/login/Login.php?err=null&&msg=abc');
} else if ($status) {
    $_SESSION['valid'] = 'true';
    $_SESSION['username'] = $username;
    header('location:../views/faculty/faculty.php');

} else {
    echo "invalid user";
}




?>