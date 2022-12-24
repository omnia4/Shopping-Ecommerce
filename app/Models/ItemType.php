<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    use HasFactory;
    protected $table="items_type";
    protected $fillable = [
        'id', 'name', 'upload_img', 'Name_report', 'arrange_type', 'hiddentouch', 'shop_id', 'category_id', 'display_order', 'mobile_id', 'published', 'name_en', 'printer_name', 'kitchen_use', 'show_min_qty', 'maintenance_use'
    ];
    public function scopeSelection($query)
    {
        return $query->select('id','name','shop_id');
    }
    public function items()
    {
        return $this->hasMany(Item::class,'sale_unit','id');
    }


    public function products()
    {
        return $this->hasMany(Item::class,'sale_unit');
    }

    public function subCategories(){

        return $this->hasMany(ItemType::class,'category_id','id');
    }


    // public function getCountAttribute ()
    // {
    //     $count = Item::where('sale_unit', $this->id)->count();
    //     return $count;
    // }

    public function getImgAttribute()
    {
        if($this->upload_img){
            return asset('V1/assets/images/categories/'.$this->upload_img ) ;
        }

            return asset('V1/assets/images/categories/33.jpg');
    }

}
