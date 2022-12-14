<?php
require_once('db.php');

function facultyinsertUser($user)
{
    $con = getConnection();
    $sql = "insert into Faculty_model values('','{$user['firstname']}' ,'{$user['lastname']}', '{$user['phoneno']}', '{$user['email']}','{$user['gender']}', '{$user['address']}','{$user['username']}', '{$user['password']}' ,  '{$user['confirmpassword']}','{$user['dst']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function facultyeditUser($user)
{
    $con = getConnection();
    $sql = "UPDATE  Faculty_model SET ('','{$user['firstname']}' ,'{$user['lastname']}', '{$user['phoneno']}', '{$user['email']}', '{$user['address']}','{$user['username']}'";

    $status = mysqli_query($con, $sql);
    return $status;
}
function facultysearchUserById($id)
{
    $con = getConnection();

}
function facultyallUser($id)
{
    $con = getConnection();

}


function facultyuserinfo($user)
{
    $con = getConnection();
    $sql = "select * from Student_model";
    $result = mysqli_query($con, $sql);
  
}
function facultylogin($user)
{
    $con = getConnection();
    $sql = "select * from Faculty_model where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);


    if ($user != null) {
        return true;
    } else {
        return false;
    }
}
function facultyforgotPass($UserName, $Email, $Password)
{
    $con = getConnection();
    $sql = "UPDATE Student_model SET Password =  '{$Password}' WHERE Email = '{$Email}' and UserName = '{$UserName}'";
    $result = mysqli_query($con, $sql);
    return true;
}
function checkinfo($username)
{
    $con = getConnection();
    $sql = "select * from Faculty_model where username='{$username}'";
    $status = mysqli_query($con, $sql);
    return $status;
}
function notes_upload($user)
{
    $con = getConnection();
    $sql = "insert into Faculty_model values('','{$user['dst']}')";
    $status = mysqli_query($con, $sql);
    return $status;

}
?>