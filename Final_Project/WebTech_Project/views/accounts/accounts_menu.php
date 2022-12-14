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
    $row = mysqli_fetch_assoc($result)
        ?>
    <div class="student_menu">
        <button><a href="accounts_home.php">Profile</a></button>
        <br>
        <button><a href="account_finance.php">Student Finance</a></button>
        <br>
        <button><a href="account_payment.php">Take Payment</a></button>
        <br>
        <button><a href="account_notice.php">Give Notice</a></button>
        <br>
        <button><a href="account_permit.php">Exam Permit</a></button>
        <br>

        <?php

        ?>
    </div>
</body>

</html>