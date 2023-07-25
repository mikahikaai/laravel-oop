<?php

use App\Http\Controllers\ArmadaController;
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

Route::get('/', function(){
    return view('index');
} );

Route::get('/armada', [ArmadaController::class, 'home']);
Route::get('/armada/create', [ArmadaController::class, 'create']);
Route::post('/armada/docreate', [ArmadaController::class, 'docreate']);
Route::get('/armada/update/{id}', [ArmadaController::class, 'update']);
Route::post('/armada/doupdate/{id}', [ArmadaController::class, 'doupdate']);
Route::get('/armada/delete/{id}', [ArmadaController::class, 'delete']);
