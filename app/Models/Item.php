<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemImage;
use App\Models\ItemComment;
use App\Models\Favorite;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;
    protected $table = "items";
    protected $fillable = [
        'id', 'item_name', 'barcode', 'sale_price', 'lowest_price', 'pay_price', 'disc_value', 'sale_unit', 'quantity', 'unit_id', 'company_id', 'device_id', 'shelf', 'pur_unit', 'pur_unit_equal', 'expire_date', 'item_group', 'size_id', 'color_id', 'incom_date', 'min_quantity', 'Collection', 'cooking_add', 'background_color', 'order_show', 'laststoreIdOrder', 'require_serial', 'meter_ceramic', 'available', 'game', 'about', 'bolla', 'supplier_id', 'img', 'add_user', 'add_date', 'edit_user', 'edit_date', 'shop_id', 'is_special', 'is_engine', 'online', 'card_company_id', 'details', 'mobile_id', 'used_for_small', 'used_for_medium', 'used_for_large', 'rent_type', 'view', 'vat_state', 'vat_id', 'item_add_type', 'withDiscount', 'discount_percent', 'searchCount', 'measruing_type', 'name_en', 'details_en', 'price_befor_offer', 'discount_start_date', 'discount_end_date', 'damaged', 'factory_id', 'medicine', 'sale_code', 'purchase_code', 'is_card', 'additional_charge_fee', 'purchase_vat_state', 'purchase_vat_id', 'is_project', 'project_client_id', 'manufacturing', 'parent_code', 'item_einvoice_code', 'start_qty', 'start_pay', 'not_sold'
    ];

    protected $appends = array('image_url');
    //protected $appends= ['image_url'];

    public function scopeSelection($query)
    {
        return $query->select('id', 'img', 'discount_percent', 'item_name', 'sale_price', 'pay_price', 'lowest_price', 'disc_value', 'sale_unit', 'shop_id', 'withDiscount');
    }
    public function type()
    {
        return $this->belongsTo(ItemType::class, 'sale_unit', 'id');
    }
    public function rates()
    {
        return $this->hasMany(ItemRate::class, 'item_id', 'id');
    }

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }
    public function favorites()
    {
        return $this->belongsTo(Favorite::class,'product_id','id');

    }
    public function wishlists()
    {
        return $this->belongsTo(Wishlist::class,'product_id','id');
    }

    public function categories()
    {
        return $this->belongsTo(ItemType::class, 'sale_unit');
    }

    public function getImageUrlAttribute()
    {
        if ($this->img && file_exists(public_path($this->img))) {
            return url($this->img);
        }
        return asset('V1/assets/images/blog/01.webp');
    }
}
