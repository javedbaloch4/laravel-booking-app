<?php

    // Dashboard
    Route::resource('/','DashboardController');

    // Clients
    Route::resource('clients','ClientsController');

    // Rooms
    Route::resource('rooms','RoomController');

    // Bookings
    Route::resource('booking','BookingController');
    // Cancel Bookings
    Route::post('booking/{room_id}/{booking_id}','BookingController@cancel')->name('booking.cancel');

    // Canceled Bookings
    Route::get('bookings/canceled','BookingController@canceledBookings')->name('booking.canceled');