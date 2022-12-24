<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\ItemRate;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    public function productdetails($id)
    {

        $items = Item::find($id);




        //dd($cart);
        $images = ItemImage::where('item_id', $items->id)->get();
        $comments = ItemRate::where('item_id', $items->id)->latest()->limit(3)->get();

        $similarItems =Item::where('sale_unit', $items->sale_unit)->inRandomOrder()->take(5)->get();


        if ($items) {

            return view('V1.product-details', compact('items', 'images', 'comments' , 'similarItems'));
        } else {
            return view('V1.erorr');
        }
    }
}
