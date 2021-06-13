<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
</head>
<body>
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
  
    <h3> Create New User</h3>

	<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
        <tr>
			<td>Re-Pass</td>
			<td><input type="password" name="repass"></td>
		</tr>
        <tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="create" value="Create"></td>
		</tr>
	</table>
	</form>
</body>
</html>