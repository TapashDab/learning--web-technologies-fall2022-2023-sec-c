<?php

if (isset($_GET['err'])) {
    echo "null username/password";
} else if (isset($_GET['err1'])) {
    echo "First name empty";
}
?>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/design.css">
</head>

<body>
    <div class="main">
        <div class="form">
            <form action="../../controller/faculty_login_check.php" onsubmit="return validation(argu)" method="post">
                <button class="btn">LOGIN HERE</button>
                <input class=" input" type="text" name="username" value="" placeholder="USERNAME">
                <input class=" input" type="password" name="password" value="" placeholder="PASSWORD">
                <input class="submit" type="submit" value="Submit" name="submit">
                <br>
                <h3 class="h3">If you are new please first<a href="../select_rule.php">Signup</a> </h3>
                <br></br>
                <a href="Change_password.php"> Forgot Password </a>
            </form>
        </div>
    </div>
</body>

</html>