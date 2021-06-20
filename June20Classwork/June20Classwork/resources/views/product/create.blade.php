<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product - Home</title>
</head>
<body>
    <form method="post" action="/product" enctype="multipart/form-data">
		{{-- @csrf --}}
	<table>
		<tr>
			<td>Product Name:</td>
			<td><input type="text" name="pname"></td>
		</tr>
		<tr>
			<td>Brand:</td>
			<td><input type="text" name="brand"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="insert" value="insert"></td>
		</tr>
	</table>
	</form>
</body>
</html>
