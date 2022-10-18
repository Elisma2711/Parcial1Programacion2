<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Producto</title>
</head>
<body>
    <header>
        <a href="/">Volver</a>
    </header>
    <section>
        <h1>Agregar Producto</h1>
        <form action="/agregarProducto" method="post">
        @csrf

        Nombre: <input type="text" name="nombre"><br />
        Marca: <input type="text" name="marca"><br />
        Descripcion: <input type="text" name="descripcion"><br />
        Stock: <input type="number" name="stock"><br />
        <br />

        <input type="submit" value="Agregar">
        </form>
        <br />
        @if($errors->any())
            <h4 style="color: red;"><b>{{$errors->first()}}</b></h4>
        @endif
    </section>
</body>
</html>