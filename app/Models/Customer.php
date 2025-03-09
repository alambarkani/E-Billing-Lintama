<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'user_id',
        'given_id',
        'identity_number',
        'identity_scan_path',
        'address',
        'location_image_path',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoices()
    {
        return $this->hasManyThrough(Invoice::class, Subscription::class);
    }
}
