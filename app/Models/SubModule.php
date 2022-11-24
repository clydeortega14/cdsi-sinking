<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
    use HasFactory;

    protected $table = 'sub_modules';

    protected $fillable = [
        'name',
        'display_name',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function module()
    {
        return $this->hasOne(ModuleSubModule::class, 'sub_module_id', 'id');
    }
}
