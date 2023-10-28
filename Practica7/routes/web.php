<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libroController;
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

Route::get('/', [libroController::class,'Inicio'])->name('principal');
Route::get('/registro', [libroController::class,'registroLibros'])->name('registro');
Route::post('/guardarLibro', [libroController::class,''])->name('guardar');
