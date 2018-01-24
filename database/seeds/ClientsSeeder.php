<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{

    public function run()
    {
        $clients = [
            ['name' => 'Ali', 'email' => 'ali@example.com', 'phone' => '+1-202-555-0134', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'Ryan', 'email' => 'ryan@example.com', 'phone' => '+1-202-555-0199', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'Ethan', 'email' => 'ethan@example.com', 'phone' => '+1-202-555-0101', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'John', 'email' => 'john@example.com', 'phone' => '+1-202-555-0150', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'Zoey', 'email' => 'zoey@example.com', 'phone' => '+1-202-555-0104', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'Sarah', 'email' => 'sarah@example.com', 'phone' => '+1-202-555-0148', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'Michelle', 'email' => 'michelle@example.com', 'phone' => '+1-202-555-0228', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'Samantha', 'email' => 'samantha@example.com', 'phone' => '+1-202-555-0548', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'Shahid', 'email' => 'shahid@example.com', 'phone' => '+1-202-555-0111', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
            ['name' => 'John', 'email' => 'jhon@example.com', 'phone' => '+1-202-555-0121', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png'],
        ];

        foreach ($clients as $client) {
            \App\Client::create($client);
        }
    }
}
