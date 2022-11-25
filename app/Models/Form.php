<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms';

    protected $fillable = [
        'code',
        'name',
        'desc'
    ];

    public function input_fields()
    {
        return $this->hasManyThrough(FormInputField::class, FormInputFieldGroup::class);
    }
}
