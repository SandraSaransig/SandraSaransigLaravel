<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterInfoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PlayerController;
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

//Ruta de Jugadores
Route::resource('players', PlayerController::class)
->parameters(['player'=>'slug'])
->missing(function (Request $request){
    return Redirect::route('players.index');
});
