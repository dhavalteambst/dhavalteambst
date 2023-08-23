<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\RegisterController;
use App\Http\Controllers\backend\SubscriberController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/admin',[AdminController::class,'index'])->middleware('alreadyLoggedIn');
Route::get('/admin/register',[RegisterController::class,'index'])->middleware('isLoggedIn');
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->middleware('isLoggedIn');

Route::view('/admin/subscriber', 'backend/subscriber')->middleware('isLoggedIn');;

// Route::get('/subscriber',[SubscriberController::class,'index']);

Route::get('/backend/logout', function () {

    if(session()->has('user')){
        session()->pull('user');

    }
    return redirect('/admin');
});

Route::post('/admin',[AdminController::class,'login']);
Route::post('/admin/register',[RegisterController::class,'register']);