<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'name', 'state', 'city', 'pin', 'website'
    ];
}
