<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::firstOrCreate([

            'name' => 'ADMINISTRATOR',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
