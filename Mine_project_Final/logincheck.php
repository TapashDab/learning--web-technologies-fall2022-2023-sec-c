

<?php
session_start();


require_once "model.php";

$userId = $_POST['UserId'];
$password = $_POST['Password'];


$user = ['UserId' => $userId, 'Password' => $password];

$status = login($user);

if ($username == "" || $password == "") {
    header('location: login.php?err=null&&msg=abc');
} else if ($status) {
    $_SESSION['valid'] = 'true';
    $_SESSION['userId'] = $userId;
    header('location:../views/student/student.php');

} else {
    echo "invalid user";
}




?>
