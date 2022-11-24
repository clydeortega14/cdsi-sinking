<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CivilStatusTableSeeder extends Seeder
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
                'name' => 'Single',
                'desc' => 'Single'
            ],
            [
                'name' => 'Maried',
                'desc' => 'Maried'
            ],
            [
                'name' => 'Widow',
                'desc' => 'Widow'
            ],
            [
                'name' => 'Separated',
                'desc' => 'Separated'
            ]
        ] as $civil_status)
        {
            \App\Models\CivilStatus::create($civil_status);
        }
    }
}
