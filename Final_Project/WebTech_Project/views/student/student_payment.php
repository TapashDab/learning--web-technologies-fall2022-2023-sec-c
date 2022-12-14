<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="../../assets/design.css">
    <style>


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
            <div class="paymentForm">
                <form action="">
                    <h3>
                        <u> CHOOSE ANY OPTION FOR PAYMENT</u>
                    </h3>
                    <br><br>
                    <button><a href="payment/bkash.php">BKASH</a></button>
                    <button><a href="payment/visa.php">VISA CARD</a></button>
                    <button><a href="payment/naghat.php">NAGHAT</a></button>

                </form>
            </div>

        </div>




    </div>

</body>

</html>