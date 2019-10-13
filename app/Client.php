<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    const STATUS_ISACTIVE = "active";
    const STATUS_ISDEACTIVATED = "deactivated";
    const STATUS_ISPOTENTIAL = "potential";
}
