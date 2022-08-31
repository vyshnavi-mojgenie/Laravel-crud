<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\FrontEndController;


Route::get('/', 'LoginController@login')->name('login');
Route::post('do-login', 'LoginController@doLogin')->name('do.login');
Route::get('register', 'FrontEndController@register')->name('register');





Route::group(['middleware'=>'user_auth'],function(){

    Route::get('users', 'FrontEndController@homepage')->name('welcome')->middleware('user_auth');

    Route::get('/add-user', 'FrontEndController@create')->name('create.user');
    
    Route::post('/save-user', 'FrontEndController@save')->name('save.user');
    Route::get('/edit-user/{userId}', 'FrontEndController@edit')->name('edit.user');
    Route::get('/view-user/{userId}', 'FrontEndController@view')->name('view.user');


    Route::put('/update-user/{userId}', 'FrontEndController@update')->name('update.user');
    Route::get('/delete-user/{userId}', 'FrontEndController@delete')->name('delete.user');


});



Route::get('logout', 'LoginController@logout')->name('logout');





