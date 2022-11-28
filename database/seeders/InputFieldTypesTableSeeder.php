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
                'type' => 'text',
                'value_column' => 'string'
            ],
            [
                'code' => 'textarea', // 2
                'type' => 'textarea',
                'value_column' => 'text'
            ],
            [
                'code' => 'number', // 3
                'type' => 'number',
                'value_column' => 'int'
            ],
            [
                'code' => 'date', // 4
                'type' => 'date',
                'value_column' => 'date'
            ],
            [
                'code' => 'datetime', // 5
                'type' => 'datetime',
                'value_column' => 'datetime'
            ],
            [
                'code' => 'select', // 6
                'type' => 'select',
                'value_column' => 'look_up_model_id' // select input field must have look_up_model
            ]
            ,
            [
                'code' => 'email', // 7
                'type' => 'email',
                'value_column' => 'string'
            ],
            [
                'code' => 'radio', // 8
                'type'  => 'radio',
                'value_column' => 'string'
            ],
            [
                'code' => 'checkbox', // 9
                'type'  => 'checkbox',
                'value_column' => 'string'
            ],
            [
                'code' => 'decimal', // 10
                'type' => 'decimal',
                'value_column' => 'decimal'
            ]
        ] as $input_field_type)
        {
            \App\Models\InputFieldType::create($input_field_type);
        }
    }
}
