<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <form action="notes_upload.php" method="post" enctype="multipart/form-data">
                Select pdf to upload:

                        <input type="file" id="pic" name="image" value="">
                        <input class="signup_submit" id="btnSubmit"  type="submit"
                                name="submit" value="Upload">
                    

</form>

            
        </div>





    </div>

</body>

</html>