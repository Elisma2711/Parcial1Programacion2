<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ProductoController extends Controller
{
    public function listar(){
        $Productos = producto::all();
        return view('productos',["Productos" => $Productos]);
    }

    public function agregar(Request $request)
    {
        $p = new producto();
        $p -> nombre = $request -> post('nombre');
        $p -> marca = $request -> post('marca');
        $p -> descripcion = $request -> post('descripcion');
        $p -> stock = $request -> post('stock');

        try {
            if($p -> save())
                return redirect('/');
        } catch (\Throwable $th) {
            return redirect() -> to('agregarProducto') -> withErrors(trans('No se pudo agregar el producto'));
        }
    }

    public function listarUno(Request $request){
        return view('modificarProducto',["Producto" => producto::whereId($request -> get('idProductoModificar'))->first()]);
    }

    public function modificar(Request $request)
    {
        
    }

    public function eliminar(Request $request)
    {
        producto::whereId($request -> get('idProductoEliminar'))->first()->delete();
        return redirect('/');
    }
}
