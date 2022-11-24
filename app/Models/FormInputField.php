<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormInputField extends Model
{
    use HasFactory;

    protected $table = 'form_input_fields';

    protected $fillable = [
        'name',
        'form_id',
        'form_input_field_group_id',
        'input_field_type_id',
        'placeholder',
        'label',
        'max',
        'min',
        'look_up_model',
        'required',
        'status',
        'sequence'
    ];

    protected $casts = [
        'required' => 'boolean',
        'status' => 'boolean' 
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function form_group()
    {
        return $this->belongsTo(FormInputFieldGroup::class, 'form_input_field_group_id', 'id');
    }
}
