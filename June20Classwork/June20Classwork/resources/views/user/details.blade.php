<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a>

    <h3> User Details</h3>
	<table border="1">
		<tr>
            <td>ID</td>
			<td>{{$user['id']}}</td>
        </tr>
        <tr>
			<td>Name</td>
            <td>{{$user['name']}}</td>
        </tr>
        <tr>
            <td>Password</td>
			<td>{{$user['pass']}}</td>
        </tr>
        <tr>
			<td>Cgpa</td>
            <td>{{$user['email']}}</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>{{$user['type']}}</td>
		</tr>
 	</table>
</body>
</html>
