<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Invoices\Entities\Item;

class InvoiceDetails extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $table = 'invoices_details';

    public function Item()
    {
        return $this->hasMany(Item::class, 'id', 'item_id');
    }

    public function Invoice()
    {
        return $this->belongsTo(Invoices::class);
    }

}
