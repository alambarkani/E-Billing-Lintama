<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //
    protected $fillable = ['customer_id', 'internet_package_id', 'day_due', 'status'];

    public function internetPackage()
    {
        return $this->belongsTo(InternetPackage::class);
    }
}
