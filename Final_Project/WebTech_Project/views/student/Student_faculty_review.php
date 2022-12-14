<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Riview</title>
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
            <h4>write down you riview</h4>
            Select Faculty
            <select name="select" id="">
                <option value="1">Al amin</option><br>
                <option value="2">Hasibur Rahman</option><br>
                <option value="3">Nazia alfaz</option><br>
                <option value="4">Anisur Rahman</option>
            </select>
            <div style="display:grid;justify-content:center;">
                <div>
                    <h1 style="text-align:center;">Faculty Riview</h1><br>
                    <textarea name="" id="" cols="50" rows="10"></textarea>
                </div>


            </div>
            <button style="">submit</button>
        </div>





    </div>



</body>

</html>