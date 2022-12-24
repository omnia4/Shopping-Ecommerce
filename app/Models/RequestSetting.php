<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSetting extends Model
{
    use HasFactory;
    protected $table="request_settings";
    protected $fillable=[
        'id', 'min_purchase', 'max_charge', 'fee', 'fee_type', 'shop_id', 'back_percent', 'max_cards', 'max_items', 'epay', 'bank', 'delivery', 'special_ad1', 'special_ad2', 'lat', 'lon', 'banks_info', 'reference'
    ];
}
