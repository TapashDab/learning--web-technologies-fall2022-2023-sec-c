<?php

 $con = mysqli_connect('localhost', 'root', '', 'upload result');
  $result_mark =$_GET['mark'];
 $sql = "DELETE FROM result WHERE name={$result_mark}";
 $status = mysqli_query($con, $sql);

 if($status){
    header('location: upload result.php');
}else{
    echo "DB insert error!";
}
mysqli_close($con);


?>