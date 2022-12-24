<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemVat extends Model
{
    use HasFactory;

    protected $table = 'item_vat';


    public function billAdd(){

        return $this->belongsTo(BillAdd::class , 'vat_id' ,'id');
    }
}
