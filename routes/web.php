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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> ['auth','admin']], function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('contact', function () {
        return view('admin.contact');
    });

    route::get('adddetails', 'studentController@adddetails');
    route::post('subnewform', 'studentController@elahi');
    route::get('list', 'studentController@list');
    route::get('edit/{id}', 'studentController@edit');
    route::post('update', 'studentController@update')->name('update');
    route::get('delete/{id}', 'studentController@delete');
    route::post('contactform', 'ContactController@index');

});



