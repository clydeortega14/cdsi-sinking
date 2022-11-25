<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach([
            [
                'name' => 'Male',
                'desc' => 'Male'
            ],
            
            [
                'name' => 'Female',
                'desc' => 'Female'
            ]
        ] as $gender)
        {
            \App\Models\Gender::create($gender);
        }
    }
}
