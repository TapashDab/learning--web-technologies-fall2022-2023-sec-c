<?php
session_start();
require "../Model/db.php";
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$address = $_POST['address'];
$username = $_POST['username'];



if ($firstname == "" || $lastname == "" || $phoneno == "" || $student_id == "") {
    header('location: ../views/edit_info.php?err=null');

} else {
    $user = ['firstname' => $firstname, 'lastname' => $lastname, 'phoneno' => $phoneno, 'email' => $email, 'address' => $addresss, 'username' => $username];

    $status = editProfile($user);
    if ($status) {
        header('location: ../view/student_editinfo.php');
    } else {
        echo "DB insert error!";
    }

}
?>