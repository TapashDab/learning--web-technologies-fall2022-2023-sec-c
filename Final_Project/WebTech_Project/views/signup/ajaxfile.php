<?php
session_start();
require_once('../../models/db.php');


$username = $_POST['username'];
$con = getConnection();
$sql = "SELECT username from Student_model WHERE username = '$username'";
$result = mysqli_query($con, $sql);

$show = "";
if (mysqli_num_rows($result) == 1) {
    $show = " Username already exits";

}
echo $show;

?>