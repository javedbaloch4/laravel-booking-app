<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(ClientsSeeder::class);
         $this->call(RoomsSeeder::class);
         $this->call(BookingsSeeder::class);
         $this->call(UsersSeeder::class);
    }
}
