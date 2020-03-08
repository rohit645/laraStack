<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
w|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});

Route::get('/about', 'HelloController@about');

Route::get('/pay', 'PaymentController@store');

Route::get('/mail', function(){
    Mail::to('abc@email.com')->send(new WelcomeMail());

    return new WelcomeMail();
});

Route::get('/service'  , 'ServiceController@index');
Route::post('/service'  , 'ServiceController@store');

Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');

Route::post('/customer', 'CustomerController@store');

Route::get('/customer/{customer}', 'CustomerController@show');
Route::get('/customer/{customer}/edit', 'CustomerController@edit');
Route::patch('/customer/{customer}', 'CustomerController@update');
Route::delete('/customer/{customer}', 'CustomerController@destroy');
