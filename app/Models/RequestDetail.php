<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RequestDetail extends Model
{
    use HasFactory;
    protected $table="request_details";
    protected $fillable=[
        'id','client_id', 'created_at', 'updated_at', 'request_id', 'item_id', 'quantity', 'price', 'shop_id', 'notes', 'size_id', 'color_id', 'outgoing_done', 'order_name', 'unit_id', 'coupon_id', 'sale_price', 'discount_percent', 'item_notes', 'status', 'cashier_alert', 'card_type', 'pay_price', 'stop_time', 'item_fee'
    ];

}
