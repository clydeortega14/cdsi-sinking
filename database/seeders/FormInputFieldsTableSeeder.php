<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormInputFieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach([
            /**
             * Membership Form
             * 
            */
            // Personal Data
            [
                'name' => 'pd_lastname',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Last Name',
                'label' => 'Last Name',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 1
            ],
            [
                'name' => 'pd_firstname',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'First Name',
                'label' => 'First Name',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 2
            ],
            [
                'name' => 'pd_middlename',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Middle Name',
                'label' => 'Middle Name',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => false,
                'status' => true,
                'sequence' => 3
            ],
            [
                'name' => 'pd_suffix',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Suffix',
                'label' => 'Suffix',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => false,
                'status' => true,
                'sequence' => 4
            ],
            [
                'name' => 'pd_dateofbirth',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Date of Birth',
                'label' => 'Date of Birth',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 5
            ],
            [
                'name' => 'pd_placeofbirth',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Place of Birth',
                'label' => 'Place of Birth',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 6
            ],
            [
                'name' => 'pd_civilstatus',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Civil Status',
                'label' => 'Civil Status',
                'max' => null,
                'min' => null,
                'look_up_model' => 'App\Models\CivilStatus',
                'required' => true,
                'status' => true,
                'sequence' => 7
            ],
            [
                'name' => 'pd_contactno',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Contact Number',
                'label' => 'Contact Number',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 8
            ],
            [
                'name' => 'pd_gender',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 6,
                'placeholder' => 'Gender',
                'label' => 'Gender',
                'max' => null,
                'min' => null,
                'look_up_model' => 'App\Models\Gender',
                'required' => true,
                'status' => true,
                'sequence' => 9
            ],
            [
                'name' => 'pd_age',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 3,
                'placeholder' => 'Age',
                'label' => 'Age',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 10
            ],
            
            [
                'name' => 'pd_emailaddress',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 7,
                'placeholder' => 'Email Address',
                'label' => 'Email Address',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 11
            ],
            [
                'name' => 'pd_bankacctno',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Bank Account No.',
                'label' => 'Bank Account No.',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 12
            ],
            
            [
                'name' => 'pd_bankname',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Name of Bank',
                'label' => 'Name of Bank',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 13
            ],
            [
                'name' => 'pd_presentaddress',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Present Address',
                'label' => 'Present Address',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 14
            ],
            [
                'name' => 'pd_provincialaddress',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Provincial Address',
                'label' => 'Provincial Address',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 15
            ],
            [
                'name' => 'pd_spousename',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Spouse Name',
                'label' => 'Spouse Name',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 16
            ],
            [
                'name' => 'pd_spousecontactno',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 1,
                'placeholder' => 'Spouse Contact No.',
                'label' => 'Spouse Contact No.',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 17
            ],
            [
                'name' => 'pd_spouseage',
                'form_id' => 1,
                'form_input_field_group_id' => 1,
                'input_field_type_id' => 3,
                'placeholder' => 'Spouse Age',
                'label' => 'Spouse Age',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 18
            ],

            // Source of Income (Employed)
            [
                'name' => 'sie_companyname',
                'form_id' => 1,
                'form_input_field_group_id' => 2,
                'input_field_type_id' => 1,
                'placeholder' => 'Company Name',
                'label' => 'Company Name',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 19
            ],
            [
                'name' => 'sie_officeaddress',
                'form_id' => 1,
                'form_input_field_group_id' => 2,
                'input_field_type_id' => 1,
                'placeholder' => 'Office Address',
                'label' => 'Office Address',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 20
            ],
            [
                'name' => 'sie_companycontactno',
                'form_id' => 1,
                'form_input_field_group_id' => 2,
                'input_field_type_id' => 1,
                'placeholder' => 'Company Contact No.',
                'label' => 'Company Contact No.',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 21
            ],
            [
                'name' => 'sie_position',
                'form_id' => 1,
                'form_input_field_group_id' => 2,
                'input_field_type_id' => 1,
                'placeholder' => 'Position',
                'label' => 'Position',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 22
            ],
            [
                'name' => 'sie_employementstatus',
                'form_id' => 1,
                'form_input_field_group_id' => 2,
                'input_field_type_id' => 1,
                'placeholder' => 'Employement Status',
                'label' => 'Employement Status',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 23
            ],
            [
                'name' => 'sie_grossincomepermonth',
                'form_id' => 1,
                'form_input_field_group_id' => 2,
                'input_field_type_id' => 3,
                'placeholder' => 'Gross Income Per Month',
                'label' => 'Gross Income Per Month',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 24
            ],

            // Source of Income Business
            [
                'name' => 'sib_typeofbusiness',
                'form_id' => 1,
                'form_input_field_group_id' => 3,
                'input_field_type_id' => 1,
                'placeholder' => 'Type of Business',
                'label' => 'Type of Business',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 25
            ],
            [
                'name' => 'sib_tradename',
                'form_id' => 1,
                'form_input_field_group_id' => 3,
                'input_field_type_id' => 1,
                'placeholder' => 'Trade Name',
                'label' => 'Trade Name',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 26
            ],
            [
                'name' => 'sib_businessaddress',
                'form_id' => 1,
                'form_input_field_group_id' => 3,
                'input_field_type_id' => 1,
                'placeholder' => 'Business Address',
                'label' => 'Business Address',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 27
            ],
            [
                'name' => 'sib_contactno',
                'form_id' => 1,
                'form_input_field_group_id' => 3,
                'input_field_type_id' => 1,
                'placeholder' => 'Contact No.',
                'label' => 'Contact No.',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 28
            ],
            [
                'name' => 'sib_grossincomepermonth',
                'form_id' => 1,
                'form_input_field_group_id' => 3,
                'input_field_type_id' => 1,
                'placeholder' => 'Gross Income Per Month',
                'label' => 'Gross Income Per Month',
                'max' => null,
                'min' => null,
                'look_up_model' => null,
                'required' => true,
                'status' => true,
                'sequence' => 29
            ],

            /**
             * Membership form End
             * 
            */
        ] as $form_input_field)
        {
            \App\Models\FormInputField::create($form_input_field);
        }
    }
}
