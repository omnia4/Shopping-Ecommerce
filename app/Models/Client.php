<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\contact_us;

class Client extends Authenticatable
{
    use HasFactory;
    protected $table="clients";
    protected $fillable = [
        'groub_id',
        'client_name',
        'address',
        'tele',
        'mobile1',
        'mobile2',
        'mobile3',
        'addition_date',
        'balance',
        'credit_limit',
        'data_zero',
        'add_user',
        'add_date',
        'edit_user',
        'edit_date',
        'shop_id',
        'notify_length',
        'notify_next',
        'price_list_id',
        'city_id',
        'blacklist',
        'gift_points',
        'StorePass',
        'StoreTransport',
        'StoreServices',
        'info1',
        'info2',
        'info3',
        'info4',
        'info5',
        'created_at',
        'updated_at',
        'remember_token',
        'password',
        'user_name',
        'verified_mobile',
        'device_key',
        'active_code',
        'api_token',
        'address_area',
        'address_home',
        'address_street',
        'address_elecNo',
        'client_tax_number',
        'mobile_id',
        'image',
        'display_order',
        'lat',
        'lon',
        'email',
        'player_id',
        'is_table',
        'country_id',
        'job',
        'prev_treatment',
        'file_no',
        'info6',
        'info7',
        'car_type',
        'car_sub_type',
        'car_year',
        'item_id',
        'departure_date',
        'client_bill_increase',
        'currency_id',
        'has_vat',
        'client_role',
        'governate',
        'street',
        'buildingNumber',
        'postalCode',
        'floor',
        'room',
        'landmark',
    ];

    public function scopeSelection($query)
    {
        return $query->select('id','user_name','email','password','tele');

    }

    public function items()
    {
        return $this->hasManyThrough(item::class,favourite::class,'client_id','product_id','id','id');
    }
    public function contact_us()
    {
        return $this->hasManyThrough(contact_us::class,'client_id','id');
    }
}
