<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\ItemRate;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;

class RateController extends Controller
{


    public function productRate(Request $request)
    {

        return $request->all();
        if (auth()->check()) {


            if ($request->ajax()) {
                $request->validate([
                    'comment' => 'required:rate:Null',
                    'rate' => 'required:comment:Null',


                ]);

                $data = Item::find($request->item_id)->rates()->create([
                    'comment' => $request->input('comment'),
                    'rate' => $request->input('rate'),
                    'client_id' => auth()->user()->id,
                ]);

                $data->save();

                dd($data);

                $respond = null;
                if ($request->distributer == 'comment') {

                    $respond = view('V1.comment',['comment'=>$data])->render();

                }

                return response()->json([
                    'status' => 200,
                    'respond' => $respond,


                ]);
            }
        } else {

            return response()->json([
                'status' => 401,



            ]);
        }

        /*    $validator = Validator::make($request->all(), [
            'comment' => 'required|max:192',
            'rating' => 'required|max:1',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
          //  $comments = ItemRate::where('item_id', $items->id)->latest()->limit(3)->get();


            $item = Item::find($request->item_id)->rates()->create([
                'comment' => $request->input('comment'),
                'rate' => $request->input('rating'),
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'added successfully',]);

              //  return view('V1.comment',compact('comments'))->with()->response();
        }*/


        /*      $request->validate([
            'comment' => 'required',
            'rate' => 'required',
        ]);

        $data= ItemRate::insert([
            'item_id' => $id,
            'comment' => $request->comment,
            'rate' => $request->rating,
        ]);
        //dd($request);
        return redirect('/product-details');*/


        //$comments=ItemRate::where('item_id',$id)->latest()->limit(3)->get();

        /*  ItemRate::create([
                     'item_id' =>$id,
                     'comment' => $request->comment,
                     'rate' => $request->rating,
                 ]);
                 return response()->json();*/
        /*$messag='success';
                 return back()->with('success=>$messag');*/
        // return response()->json($comments);
        //  return(view('V1.product-details',compact('comments')));

        //dd($request->all());*/


    }
}
