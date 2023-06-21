<?php

use App\Http\Controllers\BalanjaController;
use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// crud
Route::get('/', [BalanjaController::class, 'index']);
Route::get('/read', [BalanjaController::class, 'read']);
Route::get('/create', [BalanjaController::class, 'create']);
Route::post('/store', [BalanjaController::class, 'store']);
Route::get('/show/{id}', [BalanjaController::class, 'show']);
Route::post('/update/{id}', [BalanjaController::class, 'update']);
Route::get('/destroy/{id}', [BalanjaController::class, 'destroy']);


