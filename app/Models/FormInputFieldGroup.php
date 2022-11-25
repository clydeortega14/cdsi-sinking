<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormInputFieldGroup extends Model
{
    use HasFactory;

    protected $table = 'form_input_field_groups';

    protected $fillable = [
        'form_id',
        'name',
        'desc'
    ];
}
