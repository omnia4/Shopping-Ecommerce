<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table="notifications";
    protected $fillable = [
        'id', 'text', 'date', 'shop_id', 'created_at', 'updated_at', 'type'
    ];
    public function clients()
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }
}
