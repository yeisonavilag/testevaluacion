<?php
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;


//Route::get('/', [HomeController::class, 'index']) -> name('regiones.index');
Route::get('/',[HomeController::class, 'index']);
Route::post('/provincias',[HomeController::class,'provincias']);
Route::post('/comunas', [HomeController::class, 'comunas']);
