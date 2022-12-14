<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header('location:login.php');
}
//  if(isset($_FILES['error'])){
//     echo "File is large please select another ";
//  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="background-color:#87CEFA;">
        <table align="center" border="1px">
            <tr>
                <td>
                    <?php
                    require 'student_home_logout.php';
                    ?>
                </td>
            <tr>
                <td>
                    <?php
                        require 'student_menu.php';
                        ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Upoad Profile Picture: <br><input type="file" name="image" value=""><br>
                        <input type="submit" name="submit" value="SUBMIT">



                    </form>

                </td>
            </tr>
            </tr>
        </table>
    </div>

</body>

</html>