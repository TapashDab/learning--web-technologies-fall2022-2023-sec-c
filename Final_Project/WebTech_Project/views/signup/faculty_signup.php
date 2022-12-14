
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="../../assets/design.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <div class="signup_form">
        <form action="../../controller/faculty_signup_check.php" method="post" enctype="multipart/form-data"
            onsubmit="return CheckPass()">
            <div class="background">

                <table class="area">

                    <tr>
                        <th colspan="2"><button class="signup_here">SIGNUP HERE</button></th>
                    </tr>

                    <tr>

                        <td>FirstName</td>
                        <td><input type="text" id="firstname" name="firstName" value=""> <span id="message2"
                                style="color:red;font-size:15px;"> </span></td>
                    </tr>
                    <br>
                    <tr>
                        <td>LastName</td>
                        <td><input type="text" id="lastname" name="lastName" value=""><span id="message3"
                                style="color:red;font-size:15px;"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>PhoneNo.</td>
                        <td><input type="phone" id="phoneno" name="phoneno" value=""><span id="message4"
                                style="color:red;font-size:15px;"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" id="email" name="email" value=""><span id="message5"
                                style="color:red;font-size:15px;"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" id="gender" name="gender" value="Male" required> Male
                            <input type="radio" id="gender" name="gender" value="Female" required> Female

                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Address</td>
                        <td>
                            <Address><input type="address" id="address" name="address"></Address>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" id="username" name="username" value="">
                            <br><span id="error_massage" style="color: white; font-size: 20px;"></span>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" id="password" name="password" value=""
                                onkeyup=" return passwordValue()">
                            <br>
                            <a style="color:white; font-size: 20px;" id="message"></a>
                        </td>

                    </tr>
                    <br>
                    <tr>
                        <td>Confirm_Password</td>
                        <td><input type="password" id="txtConfirmPassword" name="confirmpassword" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            <p>Drop Your CV Here</p>
                        </td>
                        <td>
                            <input type="file" id="cv" name="cv" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Upload Your Picture</p>
                        </td>

                        <td><input type="file" id="pic" name="image" value=""></td>
                    </tr>
                    <br>
                    <tr>

                        <td colspan="2"><input class="signup_submit" id="btnSubmit" onclick=" return Validate() " type="submit"
                                name="submit" value="Register">
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><a class="link" href="../login/Login.php">Student Login</a></td>
                        <td><a class="link" href="../login/faculty_login.php">Faculty Login</a></td>
                    </tr>



                </table>
                <script type="text/javascript"
                    src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                <script src="jquery.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $("#username").on("focusout", function () {
                            var username = $("#username").val();
                            $.ajax(
                                {

                                    url: "ajaxfile.php",
                                    type: "POST",
                                    data: { username: username },
                                    success: function (mydata) {
                                        $("#error_massage").html(mydata);

                                    }


                                })


                        })

                    })
                </script>
                <script>
                    function passwordValue() {
                        var password = document.getElementById('password').value;
                        var x = 0;
                        var y = 0;
                        var z = 0;

                        for (let i = 0; i < password.length; i++) {
                            if ((password[i] >= 'A' && password[i] <= 'Z') || (password[i] >= 'a' && password[i] <= 'z')) {
                                x = x + 1;
                            }
                            else if ((password[i] > '9' || password[i] < '0') && password[i] != ' ') {
                                z = z + 1;
                            }
                            else {
                                y = y + 1;
                            }
                        }
                        if (password.length < 5) {
                            document.getElementById('message').innerHTML = "Password can't be less than 5";
                        }
                        else if ((x == 0 && z > 0) || (x > 0 && z == 0)) {
                            document.getElementById('message').innerHTML = "Password strength is medium";
                        }
                        else {
                            document.getElementById('message').innerHTML = "Password strength is strong";
                        }

                    }

                    function Validate() {
                        var firstname = document.getElementById("firstname").value;
                        var lastname = document.getElementById("lastname").value;
                        var phoneno = document.getElementById("phoneno").value;
                        var email = document.getElementById("email").value;
                        var password = document.getElementById("password").value;
                        var confirmPassword = document.getElementById("txtConfirmPassword").value;
                        var fileInput = document.getElementById('pic');
                        var filePath = fileInput.value;
                        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                        if (firstname == "") {
                            document.getElementById("message2").innerHTML = " <br>**Fill the firstname please!";
                            return false;
                        }
                        if (lastname == "") {
                            document.getElementById("message3").innerHTML = " <br>**Fill the lastname please!";
                            return false;
                        }
                        if (phoneno == "") {
                            document.getElementById("message4").innerHTML = " <br>**Fill the phoneno please!";
                            return false;
                        }
                        if (email == "") {
                            document.getElementById("message5").innerHTML = " <br>**Fill the email please!";
                            return false;
                        }

                        else if (password != confirmPassword) {
                            alert("Passwords do not match.");
                            return false;
                        }
                        else if (!allowedExtensions.exec(filePath)) {
                            alert('Invalid file type');
                            fileInput.value = '';
                            return false;
                        }
                        else {
                            return true;
                        }


                    }






                </script>


            </div>



        </form>
    </div>
    </div>


</body>

</html>