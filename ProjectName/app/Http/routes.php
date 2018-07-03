<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {

    
    $first_name = "Edford";
    $last_name = "Phillips";
    $email = "bob@bob.com";

    return view('about', compact('first_name', 'last_name', 'email'));
});
