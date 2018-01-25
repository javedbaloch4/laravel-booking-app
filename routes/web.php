<?php

    // Dashboard
    Route::resource('/','DashboardController');

    // Clients
    Route::resource('clients','ClientsController');

    // Rooms
    Route::resource('rooms','RoomController');

    // Bookings
    Route::resource('booking','BookingController');