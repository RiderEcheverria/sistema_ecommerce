<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database Seeders.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gma.com',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('Admin');
    }
}
