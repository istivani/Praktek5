<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Login Form</title>
</head>
<body>
	<form method="POST" action="login.php">
		<table>
			<tr>
			<td width="80">Name :</td>
			<td><input type="text" id="name" name="name"></td>
			</tr>

			<tr>
			<td width="80">Email :</td>
			<td><input type="email" id="email" name="email"></td>
			</tr>

			<tr><td><input type="submit" name= "btnLogin" value="Login"></td></tr>
		</table>
	</form>
</body>
</html>