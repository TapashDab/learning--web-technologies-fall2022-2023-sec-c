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
            <div class="search">
            <input class="searchbar" type="search" id="search" name="" value="" placeholder = "Search by course">
            <input class="searchsubmit"type="button" id="click" name="submit" value="Search" onclick="Search()"> 
            <br>
            </div>
		<h3></h3>
		<h1></h1>
        <br>
        <br>

                <table cellpadding="7px" border="2px" cellspacing="0px">
                    <tr>
                        <th>NUMBER</th>
                        <th>COURSE</th>
                        <th>TIME</th>
                        <th></th>
                        <?php
    while ($row = mysqli_fetch_assoc($status)) {
                        ?>

                    </tr>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['course']; ?>
                        </td>
                        <td>
                            <?php echo $row['time']; ?>
                        </td>
                        <td><button><a href="">ADD</a></td></button>
                    </tr>
                    <?php


    }
}

                    ?>


                </table>
                <br>
                <h5> Please select which course you want to take </h5>
                <br><br>

                Select course.
                <select style="padding:2px;text-align:center;" name="select" id="">
                    <option value="1">Webtech</option><br>
                    <option value="2">Java</option><br>
                    <option value="3">C++</option><br>
                </select>
                <input type="submit" name="submit" value="Submit">

            </form>
        </div>

    </div>

    <script>
		function Search(){
            let search = document.getElementById('search').value;
            let jsearch = {'search': search};
            let json = JSON.stringify(jsearch);

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'section_search.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('data='+json);

            xhttp.onreadystatechange = function (){

                if(this.readyState == 4 && this.status == 200){
                    document.getElementsByTagName('h3')[0].innerHTML = this.responseText;
                }
            } 
        }
		</script>

</body>

</html>