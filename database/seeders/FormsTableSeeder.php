<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
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
                'code' => 'membership.form',
                'name' => 'Membership Form',
                'desc' => 'Membership Application Form'
            ],
            [
                'code' => 'loan.application.form',
                'name' => 'Loan Form',
                'desc' => 'Loan Application Form'
            ]
        ] as $form)
        {
            \App\Models\Form::create($form);
        }
    }
}
