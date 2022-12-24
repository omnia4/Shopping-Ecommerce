<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    use HasFactory;
    protected $table="contact_us";
    protected $fillable = [
        'id',
        'comtact_msg',
        'reply_msg',
        'name',
        'email',
        'shop_id',
        'client_id',
    ];
    public function scopeSelection($query)
    {
        return $query->select('id',
        'comtact_msg',
        'reply_msg',
        'name',
        'email',);
    }
    public function clients()
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }
}
