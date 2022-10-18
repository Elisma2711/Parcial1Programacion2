<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <header>
        <a href="/logout"><button>Logout</button></a>
        <a href="/agregarProducto"><button>Agregar producto</button></a>
    </header>
    
    <section>
        <h1>Productos</h1>

        @isset($Productos)
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
                @foreach($Productos as $producto)
                <tr>
                    <td> {{ $producto -> id }} </td>
                    <td> {{ $producto -> nombre }} </td>
                    <td> {{ $producto -> marca }} </td>
                    <td> {{ $producto -> descripcion }} </td>
                    <td> {{ $producto -> stock }} </td>
                </tr>
                @endforeach
            </table>
        @endif
        <br />
        <br />
        <form action="/modificarProducto" method="get">@csrf
            <h3>Modificar Producto</h3>
            Id Producto: <input type="number" name="idProductoModificar"> <br />
            <input type="submit" value="Modificar">
        </form>

        <form action="/eliminarProducto" method="get">@csrf
            <h3>Eliminar Producto</h3>
            Id Producto: <input type="number" name="idProductoEliminar"> <br />
            <input type="submit" value="Eliminar">
        </form>
    </section>
</body>
</html>