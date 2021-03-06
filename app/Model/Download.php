<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = 'downloads';

    protected $fillable = [
        'title',    
        'file_name',
        'original_name'
    ];
    
}
