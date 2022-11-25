<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleSubModule extends Model
{
    use HasFactory;

    protected $table = 'module_sub_modules';

    protected $fillable = [
        'module_id',
        'sub_module_id'
    ];

    public function sub_module()
    {
        return $this->belongsTo(SubModule::class, 'sub_module_id', 'id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
}
