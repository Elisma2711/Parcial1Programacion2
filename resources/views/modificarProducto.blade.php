<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Producto</title>
</head>
<body>
    <header>
        <a href="/">Volver</a>
    </header>
    <section>
        <h1>Modificar Producto</h1>
        <form action="/modificarProducto" method="post">
        @csrf

        <table>
            <tr>
                <tbody style="background: skyblue;">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                </tbody>
            </tr>
            <tr>
                <td> {{ $Producto -> id }} </td>
                <td> {{ $Producto -> nombre }} </td>
                <td> {{ $Producto -> marca }} </td>
                <td> {{ $Producto -> descripcion }} </td>
                <td> {{ $Producto -> stock }} </td>
            </tr>
        </table>
        <br />
        Nombre: <input type="text" name="nombre"><br />
        Marca: <input type="text" name="marca"><br />
        Descripcion: <input type="text" name="descripcion"><br />
        Stock: <input type="number" name="stock"><br />
        <br />

        <input type="submit" value="Modificar">
        </form>
        <br />
        @if($errors->any())
            <h4 style="color: red;"><b>{{$errors->first()}}</b></h4>
        @endif
    </section>
</body>
</html>