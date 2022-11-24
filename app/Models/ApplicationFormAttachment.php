<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationFormAttachment extends Model
{
    use HasFactory;

    protected $table = 'application_form_attachments';

    protected $fillable = [
        'application_form_id',
        'file_name',
        'path'
    ];


}
