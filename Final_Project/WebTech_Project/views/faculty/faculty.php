<?php
session_start();
require_once "../../models/Faculty_model.php";
$username = $_SESSION['username'];
$user = checkinfo($username);
?>

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
        require 'faculty_home_logout.php';
        ?>
        <?php
        require 'faculty_menu.php';
        ?>
        <div class="menu_middle">
            <div class="profilepic">
                <?php
                while ($row = mysqli_fetch_assoc($user)) {
                ?>

                <table>

                    <tr>
                        <td>
                        <img src="<?php echo "../../controller/" . $row['dst']; ?>" width="300px" height="300px"
                                alt="image">
                            <br>

                        </td>
                    </tr>


                </table>
                <div class="welcome_name">
                    <h1>
                        <?php echo "Welcome " .$row['username']; ?>
                    </h1>

                </div>

                <?php
                }
                ?>
            </div>
        </div>

    </div>

</body>

</html>