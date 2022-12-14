<?php
session_start();
require_once "../../models/Student_model.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$address = $_POST['address'];
$username = $_POST['username'];

$user = ['firstname' => $firstname, 'lastname' => $lastname, 'phoneno' => $phoneno, 'email' => $email, 'address' => $address, 'username' => $username];
$status = editProfile($user);
if ($status) {
    $_SESSION['valid'] = 'true';
    $_SESSION['username'] = $username;
    header('location:student_editinfo.php');

} else {

    echo "does not exits";
}


?>