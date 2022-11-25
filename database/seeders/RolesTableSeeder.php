<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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
                'name' => 'Super Admin'
            ],
            [
                'name' => 'Admin'
            ]
        ] as $role)
        {
            \Spatie\Permission\Models\Role::create($role);
        }
    }
}
