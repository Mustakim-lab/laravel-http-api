<?php

use App\Http\Controllers\MyHttp\GetDataControlller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getdata',[GetDataControlller::class,'index']);

Route::get('/getdata/single',[GetDataControlller::class,'single']);

Route::get('/getdata/resource',[GetDataControlller::class,'resource']);

Route::get('/postdata',[GetDataControlller::class,'postdata']);

Route::get('/updatedata',[GetDataControlller::class,'updatedata']);

Route::get('/deletedata/{id}',[GetDataControlller::class,'deletedata'])->name('deletedata');
