<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationType extends Model
{
    use HasFactory;

    protected $table = 'application_types';

    protected $fillable = [
        'name',
        'description'
    ];

    public function application_forms()
    {
        return $this->hasMany(ApplicationForm::class);
    }
}
