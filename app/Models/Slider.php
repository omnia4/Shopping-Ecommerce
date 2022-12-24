<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = "slider";
    protected $fillable = [];
    public function scopeSelection($query)
    {
        return $query->select('id', 'shop_id', 'src', 'image_link', 'outside_link', 'title',);
    }

    public function shops()
    {
        return $this->belongsTo(BadrShop::class,'shop_id');
    }

    public function items()
    {
        return $this->belongsTo(Item::class,'item_id');
    }


}
