<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputFieldType extends Model
{
    use HasFactory;

    protected $table = 'input_field_types';

    protected $fillable = [
        'code',
        'type',
        'value_column'
    ];
}
