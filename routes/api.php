<?php

use App\Http\Controllers\RekruitasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/rekruitasi',[RekruitasiController::class,'index']);

Route::post('/rekruitasis',[RekruitasiController::class,'store'])->name('rekruitasi.store');

Route::put('/rekruitasi/{Rekruitasi:id}',[RekruitasiController::class,'update']);

Route::delete('/rekruitasi/{Rekruitasi:id}',[RekruitasiController::class,'destroy']);

Route::post('/approve/{Rekruitasi:id}',[RekruitasiController::class,'approve']);
Route::get('/decline/{Rekruitasi:id}',[RekruitasiController::class,'decline']);

Route::get('/', function () {
    return view('index');
});