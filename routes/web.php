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
// Route::get('/home', function () {
//     return view('welcome');
// });
// Route::get('/home/{id}',function($id){
//     return "Your id is: ".$id;
// });
// Route::get('/home/{id}/{name}',function($id,$name){
//     return " Welcome ".$name."! Your id is: ".$id;
// });
Route::get('/student/{id}', "StudentController@show");
Route::get('/name/{id}',"StudentController@name");
Route::get('/date/{id}',"StudentController@date");
Route::get('/age/{age}',"StudentController@age");
