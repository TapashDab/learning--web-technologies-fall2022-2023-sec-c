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
            <div class="home" >
                <h1>STUDENT DETAILS</h1><br>
                <br>
                <br>
                <button><a href="student_class_shedule.php">Class Shedule</a></button>
                <br>
                <button><a href="student_check_note.php">Check note</a></button>
                <br>
                <button><a href="student_checkresult.php">Check Result</a></button>
                <br>

            </div>
        </div>
    </div>

</body>

</html>