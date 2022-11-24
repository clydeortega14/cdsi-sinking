<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationTypesTableSeeder extends Seeder
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
                'name' => 'Membership Application',
                'desc' => 'Membership Application'
            ],
            [
                'name' => 'Loan Application',
                'desc' => 'Loan Application'
            ]
        ] as $application_types)
        {
            \App\Models\ApplicationType::create($application_types);
        }
    }
}
