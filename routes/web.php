<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::view('/inicio','inicio.index-inicio');
//Route::view('/sesion','sesion.login.index-login');
//Route::view('/registro','sesion.registro.index-registro');
//Route::view('/catalogo','catalogo.index-catalogo');

//RUTAS PARA LAS VISTAS
Route::get('/catalogo',[CustomAuthController::class,'catalogo']);
Route::get('/ubicacion',[CustomAuthController::class,'ubicacion']);
Route::get('/ventas',[CustomAuthController::class,'ventas'])->middleware('isLoggedIn');
Route::get('/inicio',[CustomAuthController::class,'inicio']);
Route::get('/perfil',[CustomAuthController::class,'perfil'])->middleware('isLoggedIn');
Route::get('/editarPerfil',[CustomAuthController::class,'editarPerfil'])->middleware('isLoggedIn');

//RUTAS Y METODOS PARA AUTENTICAR USUARIOS
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registro',[CustomAuthController::class,'registro'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::post('/logout',[CustomAuthController::class,'logout']);

//RUTAS PARA INICIAR SESION CON REDES SOCIALES
Route::get('login/{driver}',[CustomAuthController::class,'redirectToProvider']);
Route::get('login/{driver}/callback',[CustomAuthController::class,'handleProviderCallback']);