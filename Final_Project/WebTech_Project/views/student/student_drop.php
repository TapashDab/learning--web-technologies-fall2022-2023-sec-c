<?php
session_start();
require_once "../../models/admin_model.php";
require_once "../../models/db.php";

$con = getConnection();
$sql = "select * from all_course_admin";
$status = mysqli_query($con, $sql);

if ($status) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/design.css">
    <link rel="stylesheet" href="../../assets/style.css">

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            text-align: center;
        }
    </style>

</head>

<body>
    <div>

        <?php
    require 'student_home_logout.php';
        ?>

        <?php
    require 'student_menu.php';
        ?>
        <div class="menu_middle">
            <form class="takeSection" action="student_details.php">

                <table cellpadding="7px" border="2px" cellspacing="0px">
                    <tr>
                        <th>COURSE</th>
                        <th>TIME</th>
                        <th></th>
                        <?php

    while ($row = mysqli_fetch_assoc($status)) {
                        ?>

                    </tr>
                    <tr>

                        <td>
                            <?php echo $row['course']; ?>
                        </td>
                        <td>
                            <?php echo $row['time']; ?>
                        </td>
                        <td><button><a href="">Drop</a></td></button>

                    </tr>
                    <?php


    }
}

                    ?>


                </table>


            </form>
        </div>





    </div>

</body>

</html>