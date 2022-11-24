<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InputFieldTypesTableSeeder extends Seeder
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
                'code' => 'text', // 1
                'type' => 'text'
            ],
            [
                'code' => 'textarea', // 2
                'type' => 'textarea'
            ],
            [
                'code' => 'number', // 3
                'type' => 'number'
            ],
            [
                'code' => 'date', // 4
                'type' => 'date'
            ],
            [
                'code' => 'datetime', // 5
                'type' => 'datetime'
            ],
            [
                'code' => 'select', // 6
                'type' => 'select'
            ]
            ,
            [
                'code' => 'email', // 7
                'type' => 'email'
            ],
            [
                'code' => 'radio', // 8
                'type'  => 'radio'
            ],
            [
                'code' => 'checkbox', // 9
                'type'  => 'checkbox'
            ]
        ] as $input_field_type)
        {
            \App\Models\InputFieldType::create($input_field_type);
        }
    }
}
