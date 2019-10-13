<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Billing extends Model
{
    use SoftDeletes;

    public function billingType()
    {
        return $this->belongsTo('App\BillingType');
    }

    public function billingSubType()
    {
        return $this->belongsTo('App\BillingType', 'billing_sub_type_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
