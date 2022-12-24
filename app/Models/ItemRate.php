<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRate extends Model
{
    use HasFactory;
    protected $table="item_rates";
    protected $fillable = [
        'id', 'shop_id', 'item_id', 'rate', 'comment', 'client_id', 'created_at', 'updated_at'
    ];
    public function items()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }
}
