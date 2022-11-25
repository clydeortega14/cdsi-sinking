<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';

    protected $fillable = [
        'name',
        'display_name',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function sub_modules()
    {
        return $this->hasManyThrough(SubModule::class, ModuleSubModule::class, 'module_id', 'id', 'id', 'sub_module_id');
    }
    
}
