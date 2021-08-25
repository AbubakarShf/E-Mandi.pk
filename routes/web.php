<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Helper\Helper;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('signup', function () {
    return view('signup',['table'=>'users','index'=>'user_id']);
});

Route::get('cart', function () {
    return view('cart');
});
Route::get('base', function () {
    return view('base');
});

Route::get('productdetails/{id}', function ($id) {
    $data=(array)ApiController::dataById($id,'stock');
    return view('productdetails',['stock'=>$data]);
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('products', function () {
    $data=ApiController::selectData('stock');
    // if($data[])
    return view('products',["data"=>$data]);
});

// Route::get('addproduct', function () {
//     return view('addproduct');
// });

Route::get('/user', function (Request $r) {
    if($r->session()->has('user')){
        return view('user');
    }else{
        return view('login');

    }

});

Route::get('/login', function (Request $r) {
    if($r->session()->has('user')){
        return redirect('/');
    }else{
        
        return view('login');
    }
});



Route::get('/addproduct', function (Request $r) {
    if($r->session()->has('user')){
        if(session('user')['type']=="admin"){
            return view('addproduct',["table"=>"stock","index"=>"stock_id","uid"=>session('user')['user_id']]);
        }
    }

    return redirect("/login");
});




// logout

Route::get('/logout', function (Request $r) {
    $r->session()->flush();
    return redirect('/');
});

// api routes

Route::post('/login',[ApiController::class, 'login']); 
Route::post('/insert',[ApiController::class, 'insertQuery']); 




