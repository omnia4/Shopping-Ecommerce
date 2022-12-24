<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\ItemVat;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OrderRequest;
use App\Models\RequestDetail;

use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    public function CheckoutStore(OrderRequest $request)
    {

        $shopId = 21036;

        if (Cart::isEmpty()) {
            return back()->with(['error' => 'Cart not available']);
        } else {
            if (auth()->user()) {
                $client = auth()->user();
            } else {
                $client = $this->createUser($id, $request);
            }

        }
        $orderStore = DB::transaction(function () use ($request) {


            $order = DB::table('requests')->insertGetId([
                'client_name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'notes' => $request->notes,
                'address' => $request->address,
                'payment_type' => $request->payment_method,
//                'total' => $request->total,
            ]);

//            dd($order);
            $cartItems = Cart::getContent();
//dd($cartItems);
            foreach ($cartItems as $item) {


                $detail = RequestDetail::insert([
                    'request_id' => $order,
                    'item_id' => $item->id,
                    'quantity' => 1,
                    'price' => $item->price,
                    'shop_id' => 21036,
                ]);
                //calc and store vats
                $item = Item::find($item->id);
                if ($item->vat_state != 0) {

                    $itemVats = ItemVat::where('item_id', $item->id)->whereIn('vat_use', [0, 1])->get();
                    if ($item->vat_state == 1) {
                        $originalPrice = $item->sale_price / (1 + ($itemVats->first()->billAdd->addition_value/100)) ;

                    } else {
                        $originalPrice = $item->sale_price;

                    }

                    //calDis()

                    $itemVats->each(function ($vat) use ($item) {




                    });


                }


            }

        });
//Cart::destroy();
        toastr()->success('Payment completed successfully');
        return redirect()->route('home');

//clear cart after request
        Cart::destroy();
        return redirect()->back()->with('success', 'Your rental request has been sent');


    }// end mehtod.

}
