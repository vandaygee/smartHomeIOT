<?php

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

Route::get('/',"myController@iot_controller");
Route::get('/controllers',"myController@iot_controller");
Route::get('/sensors',"myController@sensor");
Route::get('/actuators/{view?}',"myController@actuator");

Route::get('/get_json',"myController@get_Json");
Route::post('/receive_json',"myController@receive_json");
Route::get('/receive_json1/{data}',"myController@receive_json1");
Route::get('/log/{page}',"myController@view_logs");

Route::get('/testjson',function(){
    return "hello";
});

Route::post('/save_json',"myController@save_Json");
