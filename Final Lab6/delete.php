<?php

 $con = mysqli_connect('localhost', 'root', '', 'product_db');
  $product_name =$_GET['nmae'];
 $sql = "DELETE FROM products WHERE name={$product_name}";
 $status = mysqli_query($con, $sql);

 if($status){
    header('location: display.php');
}else{
    echo "DB insert error!";
}
mysqli_close($con);


?>