<?php
require_once('db.php');

function showcourse()
{
    $con = getConnection();
    $sql = "select * all_course_admin";
    $status = mysqli_query($con, $sql);
    return $status;
}
?>