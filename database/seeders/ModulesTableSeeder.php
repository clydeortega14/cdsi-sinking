<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
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
                'name' => 'ACCOUNT ACCESS',
                'display_name' => 'ACCOUNT ACCESS'
            ],
            [
                'name' => 'MEMBERSHIP PROFILE',
                'display_name' => 'MEMBERSHIP PROFILE'
            ],
            [
                'name' => 'SHARE CAPITAL',
                'display_name' => 'SHARE CAPITAL'
            ],
            [
                'name' => 'LOAN MODULE',
                'display_name' => 'LOAN MODULE'
            ],
            [
                'name' => 'FRONT OFFICE / TELLERING',
                'display_name' => 'TELLERING'
            ],
            [
                'name' => 'BACK OFFICE / ACCOUNTING',
                'display_name' => 'ACCOUNTING'
            ],
        ] as $module) 
        {
            \App\Models\Module::create($module);
        }
    }
}
