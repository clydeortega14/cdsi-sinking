<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach([
            // Input Fields
            [
                'name' => 'view.membership.input.field'
            ],
            [
                'name' => 'add.membership.input.field'
            ],
            [
                'name' => 'edit.membership.input.field'
            ],

            [
                'name' => 'create.membership.application'
            ]
        ] as $permission)
        {
            \Spatie\Permission\Models\Permission::create($permission);
        }
    }
}
