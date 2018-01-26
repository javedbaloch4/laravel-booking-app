<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $users = [
            ['name' => 'alex', 'email' => 'alex@exmaple.com', 'password' => bcrypt('secret')],
            ['name' => 'javed', 'email' => 'javed@exmaple.com', 'password' => bcrypt('secret')]
        ];

        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
