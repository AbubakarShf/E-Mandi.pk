<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/whyus', function () {
    return view('whyus');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/user', function (Request $r) {
    if($r->session()->has('user')){
        return view('user');
    }else{
        return view('login/login');
    }

});


Route::get('/login', function (Request $r) {
    if($r->session()->has('user')){
        return view('user');
    }else{
        return view('login/login');
    }
});



Route::get('/addstock', function (Request $r) {
    return $r->session()->has('user');
    if(session('user')['type']=="admin"){
        return view('addstock');

    }else{
        return view('404');
    }
});


Route::post('/login',[ApiController::class, 'login']); 


// logout

Route::get('/logout', function (Request $r) {
    $r->session()->flush();
    return view('login/login');
});






