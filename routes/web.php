<?php

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

Route::get('/helo', function () {
    echo"Hello world";
}); 

Route::get('/test/{name}/{id?}',function($name,$id=NULL){
   $data = compact('name','id');
   return view('test')->with($data);
   
    // $data = compact('name','id');
    // return view('test')->with($data);
});

Route::get('/demo',function(){
    return view('demo');
});