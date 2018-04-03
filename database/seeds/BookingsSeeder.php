<?php

use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{

    public function run()
    {
        $bookings = [
            ['client_id' => '1', 'room_id' => '1', 'user_id'=>1, 'start_date' => '2018-01-24', 'end_date' => '2018-01-25'],
            ['client_id' => '1', 'room_id' => '2', 'user_id'=>2, 'start_date' => '2018-01-24', 'end_date' => '2018-01-26'],
            ['client_id' => '2', 'room_id' => '3', 'user_id'=>1, 'start_date' => '2018-01-24', 'end_date' => '2018-01-27'],
            ['client_id' => '3', 'room_id' => '4', 'user_id'=>2, 'start_date' => '2018-01-24', 'end_date' => '2018-01-28'],
            ['client_id' => '3', 'room_id' => '5', 'user_id'=>1, 'start_date' => '2018-01-24', 'end_date' => '2018-01-29'],
        ];

        foreach ($bookings as $booking) {
            \App\Booking::create($booking);
        }
    }
}