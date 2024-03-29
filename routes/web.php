<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterInfoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
//Añadir para la solicitud HTTP y las redirecciones HTTP
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

//Ruta indice
Route::get('/', function () {
    return view('index');
})->name('index');


//Rutas footer
Route::get('footerInfo/contact', [FooterInfoController::class, 'contact'])->name('footerinfo.contact');

Route::get('footerInfo/policy', [FooterInfoController::class, 'policy'])->name('footerinfo.policy');

Route::get('footerInfo/privacy', [FooterInfoController::class, 'privacy'])->name('footerinfo.privacy');

Route::get('footerInfo/setting', [FooterInfoController::class, 'setting'])->name('footerinfo.setting');

Route::get('footerInfo/terms', [FooterInfoController::class, 'terms'])->name('footerinfo.terms');


//Rutas de Eventos
Route::resource('events', EventController::class)
->parameters(['event'=>'slug'])
->missing(function(Request $request){
    return Redirect::route('events.index');
});

//Dar me gusta o quitar me gusta al evento
Route::get('event/{event}/like', [EventController::class, 'userlike'])->name('event.like');

//Ruta de Jugadores
Route::resource('players', PlayerController::class)
->parameters(['player'=>'slug'])
->missing(function (Request $request){
    return Redirect::route('players.index');
});

//Visible- no visible
Route::put('players/{player}/visible', [PlayerController::class,'visiblePlayer'])->name('players.visible');
Route::put('players/{player}/invisible', [PlayerController::class,'invisiblePlayer'])->name('players.invisible');

//Ruta Donde estamos nav
Route::get('general/where',[GeneralController::class,'where'])->name('general.where');

//Ruta tienda productos
Route::get('/products',[ProductController::class, 'index'])->name('general.index');


//Ruta Mensajes Contacto
 Route::resource('messages', MessageController::class)
 ->parameters(['message'=>'slug'])
->missing(function(Request $request){
    return Redirect::route('messages.message');
 });


 //Rutas auth, profile
Route::get('signup',[LoginController::class,'signupForm'])->name('signupForm');
Route::post('signup',[LoginController::class,'signup'])->name('signup');

Route::get('login',[LoginController::class,'loginForm'])->name('loginForm');
Route::post('login',[LoginController::class,'login'])->name('login');

Route::get('logout',[LoginController::class,'logout'])->name('logout');

//Ruta perfil
Route::resource('profile', ProfileController::class)->except(['index']);

//Ruta index admin
Route::get('user',[ProfileController::class, 'index'])->name('profile.index');
