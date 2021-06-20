<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
</head>
<body>
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a>

    <h3> All User</h3>

	<table border="1">
		<thead>
			<td>Username</td>
            <td>Password</td>
            <td>Name</td>
            <td>Cgpa</td>
            <td>Image</td>
            <td>Action</td>
		</thead>
        @foreach ($userlist as $user)
		<tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['pass']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['type']}}</td>
            <td>
                <a href="/user/details/{{$user['id']}}">Details</a>|
                <a href="/user/edit/{{$user['id']}}">Edit</a>|
                <a href="/user/delete/{{$user['id']}}">Delete</a>|
            </td>
		</tr>

        @endforeach

	</table>
</body>
</html>
