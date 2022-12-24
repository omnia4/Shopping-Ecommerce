<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestNote extends Model
{
    use HasFactory;
    protected $table="request_notes";
    protected $fillable=[
        'id', 'request_id', 'employee_id', 'notes', 'shop_id'
    ];
}
