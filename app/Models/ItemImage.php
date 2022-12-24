<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    use HasFactory;
    protected $table="item_images";
    protected $fillable = [
        'id', 'shop_id', 'item_id', 'image_link', 'add_time', 'image_text', 'image_state'
    ];
  /*  public function items()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }*/

}
