<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModuleSubModulesTableSeeder extends Seeder
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
                'module_id' => 2,
                'sub_module_id' => 1
            ],
            [
                'module_id' => 2,
                'sub_module_id' => 2
            ],
            [
                'module_id' => 4,
                'sub_module_id' => 3
            ]
        ] as $module_sub_module)
        {
            \App\Models\ModuleSubModule::class::create($module_sub_module);
        }
    }
}
