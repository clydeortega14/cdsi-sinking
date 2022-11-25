<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoanTypesTableSeeder extends Seeder
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

                'name' => 'Mandatory Loan',
                'desc' => 'Mandatory Loan'
            ],
            [

                'name' => 'Regular Loan',
                'desc' => 'Regular Loan'
            ],[

                'name' => 'Emergency Loan',
                'desc' => 'Emergency Loan'
            ],
        ] as $loan_type)
        {
            \App\Models\LoanType::create($loan_type);
        }
    }
}
