<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
    	'department_code', 'semester', 'code', 'name' ,
    ];
}
