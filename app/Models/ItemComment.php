<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemComment extends Model
{
    use HasFactory;
    protected $table="item_comments";
    protected $fillable = [
        'id', 'item_id','comment','comment_user_id','shop_id' ];
     /*   public function items()
        {
            return $this->belongsTo(Item::class,'item_id','id');
        }
        public function clients()
        {
            return $this->belongsTo(Client::class,'client_name','id');
        }*/

}
