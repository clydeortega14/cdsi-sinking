<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LookUpModelsTableSeeder extends Seeder
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
                'model' => 'App\Models\Gender'
            ],
            [
                'model' => 'App\Models\LoanTypes'
            ]
        ] as $look_up_model)
        {
            \App\Models\LookUpModel::create($look_up_model);
        }
    }
}
