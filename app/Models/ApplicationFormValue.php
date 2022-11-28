<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationFormValue extends Model
{
    use HasFactory;

    protected $table = 'application_forms_values';

    protected $fillable = [
        'application_form_id',
        'input_field_type_id',
        'string',
        'text',
        'int',
        'date',
        'datetime',
        'look_up_model_id',
        'decimal'
    ];
}
