<?php
require_once('db.php');

function insertUser($user)
{
    $con = getConnection();
    $sql = "insert into Student_model values('','{$user['firstname']}' ,'{$user['lastname']}', '{$user['phoneno']}', '{$user['email']}','{$user['gender']}', '{$user['address']}','{$user['username']}', '{$user['password']}' ,  '{$user['confirmpassword']}','{$user['dst']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}
function deleteUser($user)
{

}

function allUser($id)
{
    $con = getConnection();
}

function login($user)
{
    $con = getConnection();
    $sql = "select * from Student_model where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    if ($user != null) {
        $_SESSION['user'] = $user;
        return $_SESSION['user'];
    } else {
        return false;
    }
}
function checkForChangePassword($user)
{
    $con = getConnection();
    $sql = "UPDATE student_model SET password =  '{$user['password']}', confirmpassword='{$user['confirmpassword']}' WHERE  username='{$user['username']}' and email='{$user['email']}'";
    $result = mysqli_query($con, $sql);
    return $user;
    // 
}
function editProfile($user)
{
    $con = getConnection();
    $sql = "UPDATE  student_model SET firstname='{$user['firstname']}' ,lastname='{$user['lastname']}', phoneno='{$user['phoneno']}', email='{$user['email']}',address= '{$user['address']}' WHERE  username='{$user['username']}'";
    $status = mysqli_query($con, $sql);
    return $status;
}

function getuserdata($user)
{
    $con = getConnection();
    $sql = "select * from student_model where id='{$user['id']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function checkinfo($username)
{
    $con = getConnection();
    $sql = "select * from student_model where username='{$username}'";
    $status = mysqli_query($con, $sql);
    return $status;
}


function stdentusercheck($username)
{
    $conn = getConnection();
    $sql = "select * from student_model where username='{$username}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data = [
                'username' => $row['username'],
                'email' => $row['email'],
                'phoneno' => $row['phoneno'],
                'address' => $row['address'],
                'gender' => $row['gender'],
                'password' => $row['password'],
            ];
            return $data;
        }
    } else {
        return false;
    }
}
?>