<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{

    public function run()
    {
        $clients = [
            ['name' => 'Ali', 'email' => 'ali@example.com', 'phone' => '+1-202-555-0134', 'image' => 'placeholder.png'],
            ['name' => 'Ryan', 'email' => 'ryan@example.com', 'phone' => '+1-202-555-0199', 'image' => 'placeholder.png'],
            ['name' => 'Ethan', 'email' => 'ethan@example.com', 'phone' => '+1-202-555-0101', 'image' => 'placeholder.png'],
            ['name' => 'John', 'email' => 'john@example.com', 'phone' => '+1-202-555-0150', 'image' => 'placeholder.png'],
            ['name' => 'Zoey', 'email' => 'zoey@example.com', 'phone' => '+1-202-555-0104', 'image' => 'placeholder.png'],
            ['name' => 'Sarah', 'email' => 'sarah@example.com', 'phone' => '+1-202-555-0148', 'image' => 'placeholder.png'],
            ['name' => 'Michelle', 'email' => 'michelle@example.com', 'phone' => '+1-202-555-0228', 'image' => 'placeholder.png'],
            ['name' => 'Samantha', 'email' => 'samantha@example.com', 'phone' => '+1-202-555-0548', 'image' => 'placeholder.png'],
            ['name' => 'Shahid', 'email' => 'shahid@example.com', 'phone' => '+1-202-555-0111', 'image' => 'placeholder.png'],
            ['name' => 'John', 'email' => 'jhon@example.com', 'phone' => '+1-202-555-0121', 'image' => 'placeholder.png'],
        ];

        foreach ($clients as $client) {
            \App\Client::create($client);
        }
    }
}
