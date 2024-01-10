<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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
    return view('sesi/index');
});
Route::get('/sesi/register', function () {
    return view('sesi/register');
});

Route::get('/sesi', [SessionController::class, 'index']);

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);


Route::get('/todo', function () {
    return view('todo/index');
});

Route::get('/todo', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit']);
Route::put('/todo/{todo}', [TodoController::class, 'update']);
Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);
