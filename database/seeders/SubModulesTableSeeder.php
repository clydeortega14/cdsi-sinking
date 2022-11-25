<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SubModule;

class SubModulesTableSeeder extends Seeder
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
                'name' => 'Statement of Account',
                'display_name' => 'Statement of Account'
            ],
            [
                'name' => 'SL Monitoring',
                'display_name' => 'SL Monitoring'
            ],
            [
                'name' => 'With Loan Application',
                'display_name' => 'With Loan Application'
            ]

        ] as $sub_module)
        {
            \App\Models\SubModule::create($sub_module);
        }
    }
}
