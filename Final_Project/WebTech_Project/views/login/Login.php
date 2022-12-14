
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/design.css">
</head>

<body id="massage">
    <div class="main">
        <div class="form">
            <form action="../../controller/Login_check.php" method="post">
                <button class="btn">LOGIN HERE</button>
                <span id="message" style="color:red;font-size:20px;"> </span>
                <input class=" input" id="username" type="text" name="username" value="" placeholder="USERNAME">
                <span id="message1" style="color:red;font-size:20px;"> </span>
                <input class=" input" id="password" type="password" name="password" value="" placeholder="PASSWORD">
                <input class="submit" type="submit" onclick=" return Validate() " value="Submit" name="submit">
                <br>
                <h3  class="h3">If you are new please first<a href="../select_rule.php">Signup</a> </h3>
                <br></br>
                <a class="forgatePassword" style="font-size:20px" href="check_for_pass_change.php"> Forget Password </a>
            </form>
        </div>
    </div>
    <script>
        function Validate() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == "") {
                document.getElementById("message").innerHTML = " <br>**Fill the username please!";
                return false;
            }
            else if (password == "") {
                document.getElementById("message1").innerHTML = " <br>**Fill the password please!";
                return false;
            }
            else {
                return true;
            }

        } 
    </script>
</body>

</html>