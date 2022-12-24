<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCoupon extends Model
{
    use HasFactory;
    protected $table="request_coupons";
    protected $fillable=[
        'id', 'coupon_code', 'discount_value', 'discount_type', 'shop_id', 'is_valid', 'expire_date'
    ];
}
