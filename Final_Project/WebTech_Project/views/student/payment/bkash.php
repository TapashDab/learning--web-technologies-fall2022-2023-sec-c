<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/style.css">
    <link rel="stylesheet" href="../../../assets/design.css">
    <style>


    </style>
</head>

<body>
    <div>
        <?php
        require '../student_home_logout.php';
        ?>

        <?php
        require '../student_menu.php';
        ?>
        <div class="menu_middle">
            <div class="paymentFormBkash">
                <form action="">
                    SELECT PARTIAL OR FULL :
                    <select style="padding:2px;text-align:center;" name="select" id="">
                        <option value="1">partial -20000</option><br>
                        <option value="2">Full -40000</option><br>
                    </select>
                    <br>

                    <br>
                    Enter Bkash number:
                    <input type="text" name="number" id="">




                    <br>
                    <input type="submit" id="submit" value="Submit">
                    <button><a href="../student_payment.php">BACK</a></button>


                </form>




            </div>

        </div>




    </div>

</body>

</html>