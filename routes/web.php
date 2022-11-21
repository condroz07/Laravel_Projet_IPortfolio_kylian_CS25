<?php

use App\Http\Controllers\projet;
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

Route::get('/', [projet::class, 'home']);
Route::get('/aboutModif', [projet::class, 'about'])->name('about');
Route::post('/about/update/{id}', [projet::class, 'update'])->name('update');
Route::get('/skillModif', [projet::class, 'skill'])->name('skill');
Route::delete('/delete/{id}', [projet::class, 'destroy']);
Route::get('/edit/{id}',[projet::class, 'edit']);
Route::post('/update/{id}', [projet::class, 'update2']);