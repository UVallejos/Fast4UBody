<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\AyunoController;
use App\Http\Controllers\RecetaController;

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
Definimos las rutas, asociamos a los archivos que tenemos con el tipo de ruta correspondiente y colocamos un nombre a la ruta
*/ 

//Vistas estáticas
Route::view("/", "index")->name("index");
Route::view("/iniciar_sesion", "iniciar_sesion")->name("iniciarSesion");
Route::view("/registro", "registro")->name("registro");
Route::view("/sobre_el_ayuno", "sobreAyuno")->name("sobreAyuno");
Route::view("/herramientas", "herramientas")->name("herramientas");

//Usuario
Route::post("/validar_registro", [UserController::class, "registro"])->name("validar_registro");
Route::post("/iniciar_sesion", [UserController::class, "iniciar_sesion"])->name("iniciar_sesion");
Route::get("/cerrar_sesion", [UserController::class, "cerrar_sesion"])->name("cerrar-sesion");
Route::get("/mi-cuenta", [UserController::class, "mostrar_usuario"])->middleware("auth")->name("mi_cuenta");
Route::put("/mi-cuenta/editar", [UserController::class, "modificar_usuario"])->middleware("auth")->name("mi_cuenta_e");

//Diario Ayuno
Route::put("/diario-ayuno/actualizar", [DiarioController::class, "actualizar_registros"])->middleware("auth")->name("actualizar_diario");
Route::get("/diario-ayuno", [DiarioController::class, "mostrar_diario"])->middleware("auth")->name("mostrar_diario");
Route::post("/diario-ayuno/eliminar", [DiarioController::class, "eliminar_registro_ayuno"])->middleware("auth")->name("eliminar_registro_ayuno");
Route::post("/diario-ayuno/eliminarM", [DiarioController::class, "eliminar_registro_medidas"])->middleware("auth")->name("eliminar_registro_medidas");
Route::put("/diario-ayuno/modificar_peso", [DiarioController::class, "modificar_peso"])->middleware("auth")->name("modificar_peso");

//Ayuno
Route::get("/iniciar-ayuno", [AyunoController::class, "iniciar_ayuno"])->middleware("auth")->name("iniciar_ayuno");
Route::post("/guardar-ayuno", [AyunoController::class, "registrarAyuno"])->middleware("auth")->name("guardar_ayuno");
Route::post("/finalizar-ayuno", [AyunoController::class, "finalizarAyuno"])->middleware("auth")->name("finalizar_ayuno");

//Recetas
Route::get("/recetas", [RecetaController::class, "mostrar_receta"])->middleware("auth")->name("mostrar_receta");
