<?php

use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{

    public function run()
    {
        $rooms =  [
            ['name' => 'Single', 'floor' => 'Ground Floor', 'type' => 'Standard', 'beds' => 'One Bed', 'status' => '0'],
            ['name' => 'Double', 'floor' => 'Ground Floor', 'type' => 'Deluxe', 'beds' => 'Two Bed', 'status' => '0'],
            ['name' => 'Triple', 'floor' => 'First Floor', 'type' => 'Family Room', 'beds' => 'Three Bed', 'status' => '0'],
            ['name' => 'Quad', 'floor' => 'First Floor', 'type' => 'Deluxe', 'beds' => 'Two Bed', 'status' => '0'],
            ['name' => 'Queen', 'floor' => 'Second Floor', 'type' => 'Standard', 'beds' => 'One Bed', 'status' => '0'],
            ['name' => 'King', 'floor' => 'Second Floor', 'type' => 'Standard', 'beds' => 'One Bed', 'status' => '1'],
        ];

        foreach ($rooms as $room) {
            \App\Room::create($room);
        }
    }
}
