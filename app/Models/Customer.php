<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    static function customerNumber()
    {
        $latest = Customer::latest()->first();
        if (!$latest) {
            return 1;
        }

        return $latest->customer_id + 1;
    }
}
