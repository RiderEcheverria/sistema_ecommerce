<?php

namespace Database\Seeders;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            
            'password' => bcrypt('123456789'),
        ]);

        $user->assignRole('Admin');
    }
}