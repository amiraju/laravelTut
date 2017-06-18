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
//***********************Day3*******************
Route::get('post','PostController@index');
Route::get('post/insert','PostController@store');
Route::get('post/update/{id}','PostController@update');
Route::get('post/delete/{id}','PostController@destroy');
//***********************Day3*******************
Route::get('/home/index',['as'=>'home.index', function () {
    $url=route('home.index');
    return "This is project Root!!! The url is :".$url;
}]);
Route::get('/welcome/{id}/{name}',function($id,$name){
    return "Welcome Again!!!".$id.$name;
});

 Route::get('/profile','HomeController@index');
// Route::get('/welcome/{id}','HomeController@show');
// Route::get('/welcome/edit','HomeController@edit');
// Route::get('/welcome/delete','HomeController@destory');

//Route::resource('/welcome','HomeController');
