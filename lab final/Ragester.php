<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    
    <div>
        <form action="checklogin.php" method="">
            <fieldset>
                <legend>REGISTRATION</legend>
                <table>
                    <form action="/action_page.php">
                        <label for="fname">Id</label><br>
                         <input type="text" id="fname" name="fname"><br>
                         <label for="fname">password:</label><br>
                         <input type="text" id="fname" name="fname"><br>
                         <label for="fname">Confirm password:</label><br>
                         <input type="text" id="fname" name="fname"><br>
                         <label for="fname">Name</label><br>
                         <input type="text" id="fname" name="fname"><br>
                         <label for="fname">Email</label><br>
                         <input type="text" id="fname" name="fname"><br>
                         <label for="User Type">User Type</label><br>
                         <select id="user" name="user">
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
    
                     </form>
                     <tr>
                        <td><a href="">Ragister</a></td>
                        <td><input type="submit" name="submit" value="Login"></td>
                        
                     </tr>
                    </table>
                </fieldset>
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>
   