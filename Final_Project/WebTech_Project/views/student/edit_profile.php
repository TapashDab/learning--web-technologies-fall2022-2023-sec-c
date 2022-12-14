<?php

session_start();
require_once "../../models/Student_model.php";

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
    <link rel="stylesheet" href="../../assets/design.css">
</head>

<body>

    <?php
    require 'student_home_logout.php';
    ?>

    <?php
    require 'student_menu.php';
    ?>
    <?php
    while ($row = mysqli_fetch_assoc($user)) {
    ?>
    <div class="menu_middle">

        <div class="student_edit">
            <form action="check_edit.php" method="post">

                <table>
                    <br>
                    <tr>
                        <td>FIRST NAME</td>
                        <td> <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"></td>
                        <br>
                    </tr>

                    <tr>
                        <td>LASTNAME</td>
                        <td> <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"></td>
                    </tr>

                    <tr>
                        <td>PHONE NO</td>
                        <td><input type="phone" name="phoneno" value="<?php echo $row['phoneno']; ?>"></td>
                    </tr>

                    <tr>
                        <td>EMAIL</td>
                        <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
                    </tr>

                    <tr>
                        <td>ADDRESS</td>
                        <td>
                            <Address><input type="address" name="address" value="<?php echo $row['address']; ?>">
                            </Address>
                        </td>
                    </tr>

                    <tr>
                        <td>USERNAME</td>
                        <td>
                            <input type="text" name="username" value="<?php echo $row['username']; ?>">
                        </td><br>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="SAVE EDIT">
                        </td>
                    </tr>
                </table>
            </form>

        </div>
        <?php
    }

        ?>
    </div>

</body>