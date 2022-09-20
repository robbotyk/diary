<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $dates = [
        'date',
    ];
    protected $fillable = [
        'weather',
        'date',
        'First_class',
        'First_content',
        'First_impression',
        'Secound_class',
        'Secound_content',
        'Secound_impression',
        'Third_class',
        'Third_content',
        'Third_impression',
        'Total_impression',
        
    ];
}
