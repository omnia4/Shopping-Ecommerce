<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table="wishlists";
    public $timestamps = false;
    protected $fillable = [
        'id', 'product_id', 'client_id', 'shop_id', 'type'

    ];

  public function client()
  {
    return $this->hasMany(related: Product::class);
  }

  public function items()
  {
    return $this->hasMany(Item::class,'product_id','id');
  }

}
