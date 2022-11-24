<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;

    protected $table = 'application_forms';

    protected $fillable = [
        'application_type_id',
        'form_id',
        'user_id'
    ];

    public function values()
    {
        return $this->hasMany(ApplicationFormValue::class);
    }

    public function attachements()
    {
        return $this->hasMany(ApplicationFormAttachment::class);
    }
}
