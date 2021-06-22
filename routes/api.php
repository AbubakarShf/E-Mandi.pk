<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApiController;
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

// Route::post('/register','UserController@register');
Route::post('/registerUser',[UserController::class, 'registerUser']);
Route::post('/updateUser',[UserController::class, 'updateUser']);

Route::post('/select',[ApiController::class, 'selectQuery']);
Route::post('/insert',[ApiController::class, 'insertQuery']);
Route::post('/update',[ApiController::class, 'updateQuery']);
Route::post('/delete',[ApiController::class, 'deleteQuery']);
Route::post('/login',[ApiController::class, 'login']); 

Route::get('/getsession',function(){
    return session('user');
}); 
