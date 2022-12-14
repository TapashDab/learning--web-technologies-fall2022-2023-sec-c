<?php
session_start();
require_once('../models/db.php');


if (isset($_POST['submit'])) {
    require('../models/Faculty_model.php');
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    @$confirmpassword = $_POST['confirmpassword'];
    setcookie('uname', $firstname, time() + 60 * 60 * 24 * 10, '/');
}
$error = false;
$status = false;

if (strlen($phoneno) != 11) {
    echo "Invalid phone number. ";
    $error = true;
}
// echo "<br>";
if (strlen($password) < 5) {
    echo "Password can't be less than 5. ";
    $error = true;
}
// $data = stdentusercheck($username);

// if ($data != false) {
//     echo "This user is already exist. Try different username. ";
//     $error = true;
// }

$src = $_FILES['image']['tmp_name'];
$dst = "upload/" . $_FILES['image']['name'];

if (move_uploaded_file($src, $dst)) {
    echo " ";
} else {
    echo "Error";
}

if ($error == false) {
    $user = [ 'firstname' => $firstname, 'lastname' => $lastname, 'phoneno' => $phoneno, 'email' => $email, 'gender' => $gender, 'address' => $address, 'username' => $username, 'password' => $password, 'confirmpassword' => $confirmpassword, 'dst' => $dst];
    $status = facultyinsertUser($user);
    if ($status) {
        $_SESSION['username'] = $username;
        header('location: ../views/login/faculty_login.php');
    } else {
        echo "DB insert error!";
    }
}


?>