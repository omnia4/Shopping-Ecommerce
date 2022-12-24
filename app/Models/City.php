<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table="cities";
    protected $fillable = [
        'id', 'city_name', 'city_up', 'not_active', 'Incentive', 'shop_id', 'add_user', 'add_date', 'edit_user', 'edit_date', 'lon', 'lat', 'name_en', 'fee'
    ];
}
