<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tests extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'firstname', 'lastname'
    ];
}
