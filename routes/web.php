<?php

use App\Http\Controllers\AyudaController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

Route::resource('posts', App\Http\Controllers\PostController::class);

Route::get('/videos/video', [App\Http\Controllers\VideoController::class, 'index']) ->name('videos.video');
Route::get('/videos/conozcamos', [App\Http\Controllers\VideoController::class, 'video1']) ->name('videos.conozcamos');
Route::get('/videos/lavarse', [App\Http\Controllers\VideoController::class, 'video2']) ->name('videos.lavarse');
Route::get('/videos/eljuego', [App\Http\Controllers\VideoController::class, 'video3']) ->name('videos.eljuego');
Route::get('/videos/coronavirus', [App\Http\Controllers\VideoController::class, 'video4']) ->name('videos.coronavirus');
Route::get('/videos/diferencia', [App\Http\Controllers\VideoController::class, 'video5']) ->name('videos.diferencia');
Route::get('/videos/save', [App\Http\Controllers\VideoController::class, 'video6']) ->name('videos.save');

Route::get('/downloads/download', [App\Http\Controllers\DownloadController::class, 'download']) ->name('downloads.download');

Route::get('/juegos/index', [App\Http\Controllers\JuegoController::class, 'index']) ->name('juegos.index');
Route::get('/juegos/memoria', [App\Http\Controllers\JuegoController::class, 'juego1']) ->name('juegos.memoria');
Route::get('/juegos/emparejar', [App\Http\Controllers\JuegoController::class, 'juego2']) ->name('juegos.emparejar');
Route::get('/juegos/popurri', [App\Http\Controllers\JuegoController::class, 'juego3']) ->name('juegos.popurri');
Route::get('/juegos/persecusion', [App\Http\Controllers\JuegoController::class, 'juego4']) ->name('juegos.persecusion');
Route::get('/juegos/conecta', [App\Http\Controllers\JuegoController::class, 'juego5']) ->name('juegos.conecta');
Route::get('/juegos/une', [App\Http\Controllers\JuegoController::class, 'juego6']) ->name('juegos.une');

Route::get('/chat/index', [App\Http\Controllers\ChatController::class, 'index']) ->name('chat.indexchat');
Route::get('/chat/chat', [App\Http\Controllers\ChatController::class, 'chat']) ->name('chat.index');
Route::get('/chat/comunidad', [App\Http\Controllers\ChatController::class, 'comunidad']) ->name('chat.comunidad');

Route::get('/ayuda/ayuda', [App\Http\Controllers\AyudaController::class, 'index']) ->name('ayuda.ayuda');
Route::get('/ayuda/superkids', [App\Http\Controllers\AyudaController::class, 'video1']) ->name('ayuda.superkids');
Route::get('/ayuda/pregunta2', [App\Http\Controllers\AyudaController::class, 'video2']) ->name('ayuda.pregunta2');
Route::get('/ayuda/pregunta3', [App\Http\Controllers\AyudaController::class, 'video3']) ->name('ayuda.pregunta3');
Route::get('/ayuda/pregunta4', [App\Http\Controllers\AyudaController::class, 'video4']) ->name('ayuda.pregunta4');
Route::get('/ayuda/pregunta5', [App\Http\Controllers\AyudaController::class, 'video5']) ->name('ayuda.pregunta5');

Route::view('/social', 'social')->name('social');
