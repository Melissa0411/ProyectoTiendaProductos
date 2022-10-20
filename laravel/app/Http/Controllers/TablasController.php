<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\tiendas;
use App\Models\productos;
use App\Models\tipos;

class TablasController extends Controller
{
    public function usuarios()
    {
        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select('SELECT * FROM tb_usuarios');
        return view("lista_usuarios")
        -> with(['usuarios1' => $usuarios_a])
        -> with(['usuarios2' => $usuarios_b]);
    
}

public function borrar_usuarios(Usuarios $id){

    \Storage::disk('local')->delete($id->foto);//bay foto del usuario
   $id->delete();
   return redirect()->route("lista_usuarios");

}

public function editar_usuarios(Usuarios $id){

    $tipo = Tipos::all();
return view("editar_usuarios")
->with(['usuarios' => $id]) 
->with(['nivel' => $tipo]);
}

public function alta_usuarios(){
    $tipo = Tipos::all();
    return view("alta_usuarios")
    ->with(['tipos' => $tipo]);
}



public function tipos()
{
    $tipos_a = Tipos::all();
    $tipos_b = \DB::select('SELECT * FROM tb_tipos');
    return view("lista_tipos")
    -> with(['tipos1' => $tipos_a])
    -> with(['tipos2' => $tipos_b]);
}
public function tiendas()
{
    $tiendas_a = Tiendas::all();
    $tiendas_b = \DB::select('SELECT * FROM tb_tiendas');
    return view("lista_tiendas")
    -> with(['tiendas1' => $tiendas_a])
    -> with(['tiendas2' => $tiendas_b]);
}
public function productos()
{
    $produc_a = Productos::all();
    $produc_b = \DB::select('SELECT * FROM tb_productos');
    return view("lista_productos")
    -> with(['productos1' => $produc_a])
    -> with(['productos2' => $produc_b]);
}
}