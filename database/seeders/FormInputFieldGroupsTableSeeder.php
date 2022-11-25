<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormInputFieldGroupsTableSeeder extends Seeder
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
                'form_id' => 1,
                'name' => 'Personal Data',
                'desc' => 'Personal Data of Applicant'
            ],
            [
                'form_id' => 1,
                'name' => 'Source of Income',
                'desc' => 'Source of Income Employed'
            ],
            [
                'form_id' => 1,
                'name' => 'Source of Income',
                'desc' => 'Source of Income Business'
            ],
        ] as $form_input_field_group)
        {
            \App\Models\FormInputFieldGroup::create($form_input_field_group);
        }
    }
}
