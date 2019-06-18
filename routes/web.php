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
Route::get('/',function () {
    Route::get('tickets',[
        'uses' => 'TicketsController@index',
        'as' => 'tickets.index'
        ]);
     
        Route::get('tickets/create',[
         'uses' => 'TicketsController@create',
         'as' => 'tickets.create'
         ]);
         Route::post('tickets/store',[
             'uses' => 'TicketsController@store',
             'as' => 'tickets.store'
     
         ]);
         Route::get('tickets/edit/{ticket}',[
             'uses' => 'TicketsController@edit',
             'as' => 'tickets.edit'
             ]);
         Route::put('tickets/{ticket}',[
             'uses' => 'TicketsController@update',
             'as' => 'tickets.update'
             ]);
             Route::delete('tickets/{ticket}',[
                 'uses' => 'TicketsController@destroy',
                 'as' => 'tickets.delete'
                 ]);
});

Auth::routes();

//Route::resource('tickets', 'TicketsController');
Route::get('/home', 'HomeController@index')->name('home');  