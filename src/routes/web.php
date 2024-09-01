<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\MukaController;
use App\Http\Controllers\ConfirmController;

=======
use App\Http\Controllers\ContactController;
>>>>>>> 1d5a0c1 (ファイル追加)
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
Route::get('/', function ()
{
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/muka', [MukaController::class, 'index']);
Route::get('/confirm', [ConfirmController::class, 'index']);
=======

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
>>>>>>> 1d5a0c1 (ファイル追加)
