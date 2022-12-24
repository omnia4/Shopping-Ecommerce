<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Favorite;
use App\Models\Client;
use App\Models\Item;
use App\Models\Wishlist;

class WishListController extends Controller
{

    public function index()
    {
    if (auth()->user())
    {
      $items = Item::join('wishlists',function($q)
      {
        $q->on('items.id','wishlists.product_id');
        $q->where('wishlists.client_id', auth()->user()->id);
      }
        )->select('items.*')->get();
        // dd($items);

       return view('V1.wishlist',compact('items'));

    } else {
      return back();

    }


    }

    public function addToWishlist (Request $request, $itemId)
    {
        $item = Item::find($itemId);
        //dd($items);
        $WishItem = Wishlist::create([
          'product_id'=> $item ->id,
          'client_id'=> auth()->id(),
         ]);   

         return response()->json(array(
          'status' => 200,
          'message' => "added successfully ",          
      ));
    
    }

    public function removeWishCard(Request $request, $itemId)
    { 
        $item = Item::find($itemId);
       //dd($item);
     
       $removedItem = Wishlist::where('product_id',$itemId)->delete();
       
        if ($removedItem) {
            return response()->json(array(
                'status' => 200,
                'message' => "removed successfully ",

            ));
        } else {
            return response()->json([
                'status' => 400,
                'message' => "Can`t remove",

            ]);
        }
    }

}






// $clients = Client::where('id',auth::id())->first();
      //  $items = Item::orderBy('id','desc')->take(8)->get();;
      //  //dd($items);
      //  return view('V1.wishlist',compact('items','clients'));
