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

use App\Patient;

Route::get('/', function () {
    return view('welcome');
});


Route::get('hola',function(){
	return view('holamundo');
});

Route::get('patients',function(){

	$patients = Patient::all();
	//dd($patients);
	return view('patients',compact('patients'));
});