<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table="countries";
    protected $fillable = [
        'id', 'name_en', 'name_ar', 'iso_alpha2', 'iso_alpha3', 'iso_numeric', 'currency_code', 'currency_name_en', 'currency_name_ar', 'currrency_symbol', 'Phonecode', 'flag', 'orderflag'
    ];
}
