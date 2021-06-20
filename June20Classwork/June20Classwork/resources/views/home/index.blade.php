<html>
    <head>
        <link rel="stylesheet" href="{{asset('style.css')}}" />
    </head>
    <body>
        <h1>  Welcome home! {{$name}}</h1>
        <img src="{{asset('upload/abc.png')}}" width="100px" height="100px">
        
        <a href='{{route('user.create')}}'> Create User </a> |
        <a href='/user/list'> View All Users </a> |
        <a href='/logout'> 
            logout
           <!-- <input type="button" name="abc" value="submit"/> -->
        </a> 
    </body>
</html>