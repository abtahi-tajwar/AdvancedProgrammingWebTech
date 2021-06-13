<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
     
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
    
    <h3> User List</h3>
	<table border="1">
		<tr>
            <td>ID</td>
			<td>Username</td>
			<td>Password</td>
            <td>Action</td>
		</tr>
        @foreach ($userlist as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['username']}}</td>
                <td>{{$user['password']}}</td>
                <td>
                    <a href="/user/details/{{$user['id']}}"> Details</a> |
                    <a href="/user/edit/{{$user['id']}}"> Edit</a> |
                    <a href="/user/delete/{{$user['id']}}"> Delete</a> 
                </td>
            </tr>
        @endforeach
 	</table>
</body>
</html>