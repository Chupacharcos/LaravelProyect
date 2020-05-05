<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('inici');
});

//LISTADO DE JUEGOS
Route::get('/juegos', function () {
    $listado = App\juegos::all();
    return view('juegos', array('listado' => $listado));


});
//LISTADO JUEGOS WHERE LIKE NOMBRE
Route::get('/juegos/{nombre}', function ($nombre) {
    $listado = App\juegos::where('nombre_juego', 'like', '%' . $nombre . '%')->get();
    return view('juegos', array('listado' => $listado));
});
//LISTADO DE PLATAFORMAS
Route::get('/plataformas', function () {
    $listado = App\plataformas::all();
    return view('plataformas', array('listado' => $listado));
})->middleware('auth');

//LISTADO DE JUEGOS SEGUN PLATAFORMA
Route::get('/plataformas/juegos/{id}', function ($id) {
    $listado = App\juegos::where('plataforma_id', $id)->orderBy('year_juego', 'desc')->get();
    return view('juegos', array('listado' => $listado));
})->middleware('auth');

//NUEVO JUEGO
Route::get('/nuevo/juego', function () {

    $listado = App\plataformas::all();
    return view('juegosInsert', array('listado' => $listado));
})->middleware('auth');

Route::get('/nuevo/juego/insert', function (Request $request) {
    $nombre_juego = $request->input("nombre_juego");
    $year_juego = $request->input("year_juego");
    $precio_juego = $request->input("precio_juego");
    $plataforma_juego = $request->input("plataforma");

    $juego = new App\juegos;
    $juego->nombre_juego = $nombre_juego;
    $juego->year_juego = $year_juego;
    $juego->precio_juego = $precio_juego;
    $juego->plataforma_id = $plataforma_juego;
    $juego->save();
    return redirect('/juegos');

})->middleware('auth');

//FORM MODIFICAR JUEGO
Route::get('/juegos/update/{id}', function ($id) {

    $listado = App\juegos::where('id', $id)->get();
    return view('juegosUpdate', array('listado' => $listado[0]));

})->middleware('auth');

Route::get('/update/juego', function (Request $request) {
    $id_juego = $request->input("id_juego");
    $nombre_juego = $request->input("nombre_juego");
    $year_juego = $request->input("year_juego");
    $precio_juego = $request->input("precio_juego");

    $juego = App\juegos::find($id_juego);
    $juego->nombre_juego = $nombre_juego;
    $juego->year_juego = $year_juego;
    $juego->precio_juego = $precio_juego;
    $juego->save();
    return redirect('/juegos');

})->middleware('auth');

//DELETE JUEGO
Route::get('/delete/juego/{id}', function ($id) {
    App\juegos::destroy($id);
    return redirect('/juegos');

})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
