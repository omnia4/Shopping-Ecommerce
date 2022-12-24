<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Favorite;
use App\Models\Client;
use App\Models\Item;

class FavoriteController extends Controller
{

    public function index()
    {
    if (auth()->user())
    {
      
      $items = Item::join('favorites',function($q)
      {
        $q->on('items.id','favorites.product_id');
        $q->where('favorites.client_id', auth()->user()->id);
      }
        )->select('items.*')->get();
        
       return view('V1.Favorite',compact('items'));
    } else {
      return back();

    }
    }

    public function addToFav (Request $request, $itemId)
    {
        $item = Item::find($itemId);
        //dd($items);
        $favItem = Favorite::create([
          'product_id'=> $item ->id,
          'client_id'=> auth()->id(),
         ]);
         
         $favlist = Favorite::where('id', '<=', 10000)->get();
         $favCount = $favlist->count();
         console.log();
         

         return response()->json(array(
          'status' => 200,
          'message' => "added successfully ",
          'favCount'=> $favCount          
      ));
    
    }


    public function removeFavCard(Request $request, $itemId)
    {
        $item = Item::find($itemId);
       //dd($item);
     
       $removedItem = Favorite::where('product_id',$itemId)->delete();
       
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
