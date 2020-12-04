<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Noticia;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CorreoController;

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
    return view('welcome', [
        'noticias' => Noticia::all()
    ]);
});

Route::post('/contacto', [CorreoController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/users', function () {
    return Inertia\Inertia::render('Users/index', [
        'users' => User::all()
    ]);
})->name('users.index');

Route::resource('noticias', NoticiaController::class);



