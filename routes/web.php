<?php

    // Dashboard
    Route::resource('/','DashboardController');

    // Clients
    Route::resource('clients','ClientsController');
    Route::get('/clients/data','ClientsController@data')->name('clients.data');

    // Rooms
    Route::resource('rooms','RoomController');

    // Bookings
    Route::resource('booking','BookingController');
    // Cancel Bookings
    Route::post('booking/{room_id}/{booking_id}','BookingController@cancel')->name('booking.cancel');

    // Canceled Bookings
    Route::get('bookings/canceled','BookingController@canceledBookings')->name('booking.canceled');

    // Sessions
    Route::get('/login','SessionsController@create')->name('login');
    Route::post('/login','SessionsController@store');
    Route::get('/logout','SessionsController@destroy');

    // User
    Route::get('/user','UserController@index');