<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product - Home</title>
</head>

<body>
    <a href="{{ route('product.create') }}">Create Product</a>
    <h3> All User</h3>

    <table border="1">
        <thead>
            <td>Product ID</td>
            <td>Product Name</td>
            <td>Brand</td>
            <td>Product Image</td>
            <td>Action</td>

        </thead>
        @foreach ($productlist as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['pname'] }}</td>
                <td>{{ $product['brand'] }}</td>
                <td>{{ $product['pimage'] }}</td>
                <td>
                    <a href="/product/{{ $product['id'] }}">Details </a>|
                    <a href="/product/{{ $product['id'] }}/edit">Edit </a>|
                    <form method="POST" action="/product/{{ $product['id'] }}">
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>

        @endforeach

    </table>
</body>

</html>
