<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
</head>
<body>
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
  
    <h3> Create New User</h3>

	<form method="post" enctype="multipart/form-data">
		@csrf
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
        <tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
        <tr>
			<td>Cgpa</td>
			<td><input type="text" name="cgpa"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="create" value="Create"></td>
		</tr>
	</table>
	</form>
</body>
</html>