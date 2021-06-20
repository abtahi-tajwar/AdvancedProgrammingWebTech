<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
</head>
<body>
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
  
    <h3> EDIT User</h3>

	<form method="post">
		@csrf
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$user->username}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{$user->password}}"></td>
		</tr>
        <tr>
			<td>CGPA</td>
			<td><input type="text" name="cgpa" value="{{$user->cgpa}}"></td>
		</tr>
        <tr>
			<td>Name</td>
			<td><input type="name" name="name" value="{{$user->name}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="update"></td>
		</tr>
	</table>
	</form>
</body>
</html>