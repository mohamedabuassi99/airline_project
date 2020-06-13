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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/flight', function () {
        return view('flight.show_flight');
    });
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('user-dash', 'DashboardController@index')->name('user-dash');
    Route::match(['get', 'post'], '/user/delete/{id}', 'DashboardController@deleteUser');

    Route::match(['get', 'post'], '/flight/add_flight', 'FlightController@addflight');
    Route::match(['get', 'post'], '/flight/view_flight', 'FlightController@viewflight');
    Route::match(['get', 'post'], '/flight/delete_flight/{id}', 'FlightController@deleteflight');
    Route::match(['get', 'post'], '/flight/edit_flight/{id}', 'FlightController@editflight');


    Route::match(['get', 'post'], '/Ticketreservation', 'FlightController@tickeTreservation');



    Route::get('/flight/ticket', function () {
        return view('flight.show_myticket');
    });
});
