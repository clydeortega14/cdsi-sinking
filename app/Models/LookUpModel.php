<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LookUpModel extends Model
{
    use HasFactory;

    protected $table = 'look_up_models';

    protected $fillable = [
        'model'
    ];
}
