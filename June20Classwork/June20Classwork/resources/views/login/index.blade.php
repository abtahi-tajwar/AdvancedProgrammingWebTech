<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post">
		{{-- @csrf --}}
		{{-- {{csrf_field()}} --}}
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input type="submit" name="Submit" value="submit">
			<a href="/register"> Signup</a>
			</td>
		</tr>
	</table>
	</form>
	
	<br>
	{{session('msg')}}
	<br>
	@foreach ($errors->all() as $error)
		{{$error}} <br>
	@endforeach
</body>
</html>