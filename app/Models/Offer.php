<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table="offers";
    protected $fillable=[];
    public function scopeSelection($query)
    {
        return $query->select('id', 'name', 'main_items', 'show_offer', 'start_date', 'expire_date', 'shop_id');
    }
}
