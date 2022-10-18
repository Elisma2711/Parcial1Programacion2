<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <br />
    <form action="/register" method="post">@csrf
        Nickname: <input type="text" name="name"> <br />
        Password: <input type="password" name="password"> <br />
        Repetir password: <input type="password" name="paswordCheck"> <br />
        <br />
        <input type="submit" value="Register">
    </form>
    <a href="/login">Login</a>
    <br />
    @if($errors->any())
        <h4 style="color: red;"><b>{{$errors->first()}}</b></h4>
    @endif
</body>
</html>