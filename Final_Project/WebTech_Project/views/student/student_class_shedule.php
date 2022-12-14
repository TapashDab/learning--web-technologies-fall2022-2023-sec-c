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
    <div>
        <?php
        require 'student_home_logout.php';
        ?>
        <?php
        require 'student_menu.php';
        ?>
        <div class="menu_middle">
            <div style="display:grid;justify-content:center;">
                <h1 style="text-align:center;">Class Shedule</h1><br>
                <!-- <textarea name="" id="" cols="50" rows="10"></textarea> -->
                <table border="2px" cellpadding="15px" callspacing="0px">
                    <tr>
                        <th>Course Name</th>
                        <th>Time</th>

                    </tr>
                    <tr>
                        <td>Webtech</td>
                        <td>sunday <br> 11:00 - 2:00 </td>

                    </tr>
                    <tr>
                        <td>Java</td>
                        <td>Monday <br> 08:00 - 11:00 </td>

                    </tr>
                </table>

            </div>
        </div>
    </div>

</body>

</html>