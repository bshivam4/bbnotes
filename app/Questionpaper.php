<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionpaper extends Model
{
    protected $fillable=[
    		'name',
    		'college_id', 
    		'branch',
            'semester',
            'subject',
            'code',
            'exam',
            'session',
            'file',
    ];
}
