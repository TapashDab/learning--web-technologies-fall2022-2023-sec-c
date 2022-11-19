<?php

 $con = mysqli_connect('localhost', 'root', '', 'product_db');
  $product_id =$_GET['Id'];
 $sql = "DELETE FROM products WHERE Id={$product_id}";
 $status = mysqli_query($con, $sql);

 if($status){
    header('location: display.php');
}else{
    echo "DB insert error!";
}
mysqli_close($con);


?>