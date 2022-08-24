<?php

use App\Http\Controllers\MembresController;
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

Route::get('/', [MembresController::class, 'index'])->name('home');

Route::get('/addmembre', [MembresController::class, 'index2'])->name('addmembre');
Route::post('/addmembre/create', [MembresController::class, 'store']);
Route::get('/{id}/show', [MembresController::class, 'show']);
Route::put('/{id}/update', [MembresController::class, 'update']);
Route::delete('/{id}/delete', [MembresController::class, 'destroy']);
Route::get('/membres/delete', [MembresController::class, 'destroy2']);
