<?php
session_start();
$name = $_POST['name'];
$id = $_POST['id'];
$mark = $_POST['mark'];


if($name == "" || $id == "" || $mark == ""){
    //echo "null username/password/email";
    header('location: upload result.php?err=null');

}else { 
    $con = mysqli_connect('localhost', 'root', '', 'upload result');
    
    $sql = "UPDATE  products SET name ='{$name}',Id='{$id}', mark='{mark}'";
    $status = mysqli_query($con, $sql);

    if($status){
        header('location: update.php');
    }else{
        echo "DB insert error!";
    }
    
}
?>