<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <br />
    <form action="/login" method="post">@csrf
        Nickname: <input type="text" name="name"> <br />
        Password: <input type="password" name="password"> <br />
        <br />
        <input type="submit" value="Iniciar Sesion">
    </form>
    <a href="/register">Register</a>
    <br />
    @if($errors->any())
        <h4 style="color: red;"><b>{{$errors->first()}}</b></h4>
    @endif
</body>
</html>