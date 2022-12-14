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

        <img width="50" height="60">

        First Name <br>
        <input type="text" name="firstName" value=""> <br>



        LastName <br>
        <input type="text" name="lastname" value=""> <br>

        Phone No. <br>
        <input type="phone" name="phone" value=""> <br>


        Email <br>
        <input type="email" name="email" value=""> <br>


        Gender <br>
        <input type="radio" name="gender" id="gender">Male
        <input type="radio" name="gender" id="gender">Female<br>


        Address <br>
        <Address><input type="address"></Address> <br>


        Username <br>
        <input type="text" name="username" value=""> <br>

        <button style="margin:5px">Edit</button>
        <button style="margin:5px">save</button>

    </div>


    </div>



</body>

</html>