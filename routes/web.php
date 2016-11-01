<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',function(\Illuminate\Http\Request $request){
    dd($request->headers);

   return view('home',['user'=>$request->header('X-Forwarded-User')]);
});
/** @var \Illuminate\Routing\Router $router */
$router->resource('tasks','TaskBoardController');
//Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
