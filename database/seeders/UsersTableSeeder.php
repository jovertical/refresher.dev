<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Jovert',
            'last_name' => 'Palonpon',
            'email' => 'jovertical@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
