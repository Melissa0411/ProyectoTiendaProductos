<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::name('lista_usuarios')->get('/', [TablasController::class, 'usuarios']);
Route::name('lista_productos')->get('productos', [TablasController::class, 'productos']);
Route::name('lista_tipos')->get('tipos', [TablasController::class, 'tipos']);
Route::name('lista_tiendas')->get('tiendas', [TablasController::class, 'tiendas']);



