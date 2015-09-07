<?php
//"" vahele input elemendi NAME
	echo $_POST ["email"];
	echo $_POST ["password"];
	

?>

<html>
	<head>
		<title>User login page</title> <!--tabi nimi-->
		
	</head>

	<body>
		<h2>Login</h2>
		<form action="user_form.php" method="post">
		<input name="email" type="text" placeholder="E-mail"> <br><br>
		<input name="password" type="password" placeholder="password"><br><br>
		
		<input type="submit" value="Log in">
		</form>
		<h2>Create user</h2>
		
	</body>
</html>