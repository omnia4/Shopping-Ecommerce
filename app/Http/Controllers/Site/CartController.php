<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WishListController;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\DB;
use Cart;
use Auth;
use App\Models\Item;
use Darryldecode\Cart\Cart as CartCart;

class   CartController extends Controller
{
    public function cartList()

    {

        if (!auth()->user()) {
            return redirect()->route('login.show');
        }
        $cartItems = Cart::getContent();
        //$cartItems->count();

        return view('V1.cart', compact('cartItems'));
    }

    // public function addToCart(Request $request ,$itemId)
    // {
    //     $item = Item::find($itemId);

    //      $cartItem = \Cart::add($item->id, $item->item_name, $item->sale_price, 1);

    //     // //session()->flash('success', 'Product is Added to Cart Successfully !');

    //    return redirect()->route('cart.list');
    // }


    public function addToCart(Request $request, $itemId)
    {

        $item = Item::find($itemId);
        //dd(item);
        //return $item;

        $cartItem = Cart::add(array(
            'id'=>$item->id,
            'name'=>$item->item_name,
            'price'=>$item->sale_price,
            'quantity'=>1,
            'attributes' => array(
                'discount' => $item->withDiscount,
                'discount_percent' => $item->discount_percent,

            )

        ));
        $cartCount = Cart::getContent()->count();
        $content = Cart::getContent();
        $cartContentList = view('V1.includes.cartCard', ['cartItems' => Cart::getContent()])->render();


        return response()->json(array(
            'status' => 200,
            'message' => "added successfully ",
            'cartCount' => $cartCount,
            'cartContentList' => $cartContentList,

        ));
    }



    public function removeCart(Request $request, $itemId)
    {

        $item = Item::find($itemId);
        //dd($item);
        $removedItem = \Cart::remove($item->id);
        $cartCount = Cart::getContent()->count();

        //check if cart contain this item frist

        // return $removedItem ;/78\5
        if ($removedItem) {
            return response()->json(array(
                'status' => 200,
                'message' => "removed successfully ",
                'cartCount' => $cartCount,

            ));
        } else {
            return response()->json([
                'status' => 400,
                'message' => "Can`t remove",

            ]);
        }
    }

    /*public function saveOrder(OrderRequest $request)
    {

        dd($request->all());
        //serveice save order
        // calc total and vats and fee and net
        //check coupon code
        //check if has discounts
        //make new cart request
        // for loop for cart items and store in request details
        //check payment method and safe transfer file if exist
        //cart clear
        //return redirect()

    }*/


        // dd($request->all());
        //serveice save order
        // calc total and vats and fee and net
        //check coupon code
        //check if has discounts
        //make new cart request
        // for loop for cart items and store in request details
        //check payment method and safe transfer file if exist
        //cart clear
        //return redirect()

    // }

    // public function removeCart(Request $request, $itemId)
    // {

    //     $item = Item::find($itemId);
    //     \Cart::remove($item->id);

    //     session()->flash('success', 'Item Cart Remove Successfully !');

    //     return redirect()->route('cart.list');
    //
    // }
    //public function check_couponcode($itemId){
      //  $coupon = Item::where('code', $request->coupon_code)->first();
        //if(!$coupon) {
          //  return redirect()->back()->with('error', 'Invalid Coupon Code');
        //}

   // }
   public function calc_vat($itemId){
    $item = Item::find($itemId);
    if ($vat_state_applicable) {
        if ( $item ->vat_state == '0')
        {
            $sale_price = $item->sale_price;
        }
        elseif ($item->vat_state == '1')
        {
            $sale_price = ($sale_price/1.14);
        }
        elseif ($item->vat_state == '2')
        {
            $sale_price += ($sale_price*(14/100));
        }
        }
   }

    public function check_discount($itemId,$discount_start_date,$discount_end_date){
        $fetch = DB::table('items')
        ->whereDate('add_date', '>=', $discount_start_date)
        ->whereDate('add_date', '<=', $discount_end_date)
        ->get();
        return view('V1.cart',compact('fetch'));
    }
    public function CheckoutCreate()
    {


        if (Auth::check()) {
            if (Cart::getTotal() > 0) {

                $carts = Cart::getContent()->count();

                $cartTotal = Cart::getTotal();

                return view('V1.checkout', compact('carts', 'cartTotal'));
            } else {
                toastr()->warning('Shopping At list One Product');

                return redirect()->to('/');
            }
        } else {
            toastr()->error('You Need to Login First');
            return redirect()->route('login.show');
        }
    }


}
