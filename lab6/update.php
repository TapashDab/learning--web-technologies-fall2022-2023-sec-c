<?php
session_start();
$product_id =$_POST['Id'];
$name = $_POST['name'];
$buying_price = $_POST['buying_price'];
$selling_price = $_POST['selling_price'];


if($name == "" || $buying_price == "" || $selling_price == ""){
    //echo "null username/password/email";
    header('location: product.php?err=null');

}else { 
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    
    $sql = "UPDATE  products SET name ='{$name}',buying_price='{$buying_price}', selling_price='{$selling_price}' WHERE Id = '{$product_id}'";
    $status = mysqli_query($con, $sql);

    if($status){
        header('location: display.php');
    }else{
        echo "DB insert error!";
    }
    
}
?>