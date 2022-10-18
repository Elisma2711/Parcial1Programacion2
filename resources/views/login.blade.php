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
    <form action="/login" method="post">
        Nickname: <input type="text" name="name"> <br />
        Password: <input type="text" name="password"> <br />
        <br />
        <input type="submit" value="Iniciar Sesion">
    </form>
    <a href="/register">Register</a>
</body>
</html>