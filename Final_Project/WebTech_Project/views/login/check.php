<?php
session_start();


require_once "../../models/Student_model.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


$user = ['username' => $username, 'email' => $email, 'password' => $password, 'confirmpassword' => $confirmpassword];

$status = checkForChangePassword($user);

if ($username == "" || $email == "") {
    header('location: ../views/login/Login.php?err=null&&msg=abc');
} else if ($status) {
    if ($password === $confirmpassword) {
        $_SESSION['valid'] = 'true';
        $_SESSION['username'] = $username;
        header('location:Login.php');

    }


} else {

    echo "does not exits";
}


?>