<?php
       $oldpassword=$_POST['password'];
         $newpassword = $_POST['newpassword'];
         $confirm_password=$_POST['confirmpassword'];

         $flag=0;
        if (empty($password) ) {  
        header('location:Change_password.php?abc');
        $flag++;
       }
       elseif (empty($confirm_password) ) {  
        header('location:Change_password.php?abc1');
        $flag++;
       }
       elseif ($oldpassword===$newpassword)  {  
        header('location:Change_password.php?abc2');
        $flag++;
       }
       elseif($newpassword != $confirm_password)
       {
        header('location:Change_password.php?abc3');
       }

?>