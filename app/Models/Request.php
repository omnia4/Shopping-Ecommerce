<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestDetail;

class Request extends Model
{
    use HasFactory;
    protected $table="requests";
    protected $fillable=[
        'id', 'created_at', 'updated_at', 'client_id', 'shop_id', 'total', 'status', 'no_bill', 'lon', 'lat', 'user_id', 'order_no', 'delivery_date', 'fee', 'fee_type', 'discount', 'net', 'feedback', 'address', 'type', 'advance', 'rest', 'is_confirmed', 'sales_man', 'payment_type', 'fort_id', 'client_name', 'email', 'mobile', 'feedback_response', 'trans_img', 'city_id', 'coupon_id', 'discount_type', 'update_status', 'bill_id', 'cashier_alert', 'order_type', 'notes', 'device_status', 'store_id', 'category_id', 'damage', 'profit', 'car_id', 'payment', 'serial', 'image', 'warranty', 'guarantee', 'total_fees', 'app_device', 'sale_point_id', 'network_id', 'network_payment', 'network_only', 'is_deleted'
    ];
    public function requests()
    {
        return $this->hasMany(RequestDetail::class,'request_id','id');
    }
}
