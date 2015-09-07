<?php
//"" vahele input elemendi NAME
	//echo $_POST ["email"];
	//echo $_POST ["password"];
	
	$email_error= "";
	
     
//kontrolli ainult siis kui kasutaja vajutab login nuppu.
	if($_SERVER["REQUEST_METHOD"] == "POST"){
 
		//kontrollime kasutaja emaili, et see pole tühi.
			if(empty($_POST ["email"])) {
				$email_error= "See on kohustuslik väli";
			}
	}
	
	$password_error="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
 
		//kontrollime kasutaja parooli, et see pole tühi.
			if(empty($_POST ["password"])) {
				$password_error= "See on kohustuslik väli";
			}
	}
	
?>

<html>
	<head>
		<title>User login page</title> <!--tabi nimi-->
		
	</head>

	<body>
		<h2>Login</h2>
		<form action="user_form.php" method="post">
		<input name="email" type="text" placeholder="E-mail"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="password"> <?php echo $password_error; ?><br><br>
		
		<input type="submit" value="Log in">
		</form>
		<h2>Create user</h2>
		
	</body>
</html>