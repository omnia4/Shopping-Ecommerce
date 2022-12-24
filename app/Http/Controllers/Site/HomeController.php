<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\BadrShop;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemType;
use App\Models\Offer;
use App\Models\Slider;
use App\Models\Contact;

use Illuminate\Support\Facades\DB;
use Cart;
use App\Models\ItemRate;
use App\Models\ItemImage;
use App\Models\Page;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('shop_id','21036')->selection()->take(5)->get();
        $items=Item::where('shop_id','21036')->Selection();
        $featured_products= clone $items->where('is_special','1')->paginate(10);
        $latest_products= clone $items->orderBy('id','desc')->paginate(10);
        $sellars= Item::join('invoices_details', 'invoices_details.item_id', '=', 'items.id')
            ->where('items.shop_id','21036')
            ->select('items.*', DB::raw('SUM(invoices_details.quantity) as SoldQuantity'))
            ->groupBy('items.id')
            ->orderBy('SoldQuantity', 'desc')->paginate(10);
        $trends= clone $items->orderBy('id', 'desc')->paginate(10);
        $special_offers= clone $items->where('withDiscount',1)->paginate(10);
//        $offers=Offer::where(['shop_id'=>'21036' , 'show_offer'=>'1'])
//        ->whereDate('expire_date', '>=', Carbon::today()->toDateString())->selection()->paginate(10);

        $blogs=Page::where('shop_id','21036')->selection()->paginate(5);
        return view('V1.home.index', compact('sliders','featured_products','latest_products','sellars','trends','special_offers','blogs'));
    }
}
