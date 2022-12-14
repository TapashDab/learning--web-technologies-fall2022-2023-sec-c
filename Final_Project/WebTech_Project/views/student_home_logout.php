<?php
require_once('../config/db.php');

$query = "select * from users";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/design.css">
</head>

<body>
    <div class="student">
        <h1>STUDENT</h1>
        <a href="student.php">Home</a>
        <a href="../student/Login.php">Logout</a>

    </div>


</body>

</html>