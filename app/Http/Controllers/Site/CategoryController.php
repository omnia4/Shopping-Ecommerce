<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\BadrShop;
use App\Models\Item;
use App\Models\ItemRate;
use App\Models\ItemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request , $grid ,$cat=null)
    {

                $category = $request->category;
                $allItems=Item::selection()
                ->where('shop_id',21036)
                ->when($cat != null , function($query) use($cat){
                    $query->where('sale_unit' , $cat);
                })->orWhere(function($query) use($request){
                    $query->when($request->categories , function($query) use($request){
                        $query->whereIN('sale_unit' , $request->categories);
                });
                })->when($request->input_right,function($query) use($request){
                    $query->where('sale_price' ,'>=' ,$request->input_right);
                })->when($request->input_left,function($query) use($request){
                    $query->where('sale_price' ,'<=' ,$request->input_left);
                })->orderBy('id')->get();


                return view('V1.Categories.shop',compact('allItems' ,'grid'));



                /*$category = $request->category;
                $itemCat=Item::selection()->where('shop_id','21036')->whereIN('sale_unit',explode(',',$category))->orderBy('id')->get();
                $itemPrice = Item::whereBetween('sale_price',[$request->input_left, $request->input_right])->where('shop_id','21036')->get();
                return view('V1.ajax_product',compact('allItems'));*/
            }


}
