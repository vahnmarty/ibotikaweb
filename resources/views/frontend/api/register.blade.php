<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="{{ url('api/user/http-register') }}">
	<input type="text" name="token" value="123"><br>
	<input type="text" name="secret" value="123"><br>
	<input type="text" name="first_name" value="Vahn"><br>
	<input type="text" name="last_name" value="Marty"><br>
	<input type="text" name="username" value="vahnmarty"><br>
	<input type="email" name="email" value="vahnmarty@gmail.com"><br>
	<input type="text" name="cellphone" value="123123123"><br>
	<input type="password" name="password" value="12345678"><br>
	<input type="password" name="password_confirmation" value="12345678"><br>
	<input type="submit" name="" value="Register">
</form>
</body>
</html>