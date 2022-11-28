<?php

namespace Database\Seeders;

use App\Models\LoanType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => \Illuminate\Support\Facades\Hash::make('v4AS8jX%BeMy'),
            'remember_token' => \Illuminate\Support\Str::random(10)
        ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => \Illuminate\Support\Facades\Hash::make('v4AS8jX%BeMy'),
            'remember_token' => \Illuminate\Support\Str::random(10)
        ]);

        \App\Models\User::factory(10)->create();

        $this->call(ModulesTableSeeder::class);
        $this->call(SubModulesTableSeeder::class);
        $this->call(ModuleSubModulesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(FormsTableSeeder::class);
        $this->call(FormInputFieldGroupsTableSeeder::class);
        $this->call(InputFieldTypesTableSeeder::class);
        $this->call(FormInputFieldsTableSeeder::class);
        $this->call(CivilStatusTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(LoanTypesTableSeeder::class);
        $this->call(LookUpModelsTableSeeder::class);

        (\App\Models\User::find(1))->assignRole(\Spatie\Permission\Models\Role::where('name', 'super.admin')->first());
    }
}
