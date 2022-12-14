<?php
session_start();
require_once "../../models/Faculty_model.php";
$username = $_SESSION['username'];
$user = checkinfo($username);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php
    require 'faculty_home_logout.php';
    ?>

    <?php
    require 'faculty_menu.php';
    ?>



    <div class="menu_middle">
        <div class="check_info">


        <?php
            while ($row = mysqli_fetch_assoc($user)) {
            ?>

            
            <h3 ><u>PROFILE</u></h3>
                <br>
                First Name :
                <?php echo $row['firstname']; ?>
                <br>
                <br>
                LastName :
                <?php echo $row['lastname']; ?>
                <br>
                <br>
                Phone No :
                <?php echo $row['phoneno']; ?>
                <br>
                <br>
                Email :
                <?php echo $row['email']; ?>
                <br>
                <br>
                Address :
                <?php echo $row['address']; ?>
                <br>
                <br>
                Username :
                <?php echo $row['username']; ?>
                <br>
                <br>
                <?php
            }
                ?>
        </div>
    </div>







</body>

</html>