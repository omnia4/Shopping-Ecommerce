<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ItemType;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        function random_part() {
            return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }
        function randomHEX($amount) {
            $_result = "";
            for ($i = 0 ; $i < $amount; $i++) {
                $_result .= random_part();
            }
            return $_result;
        }
        //to get a 16 HEX number
        $icons=array("cast","boombox","film","music-note-beamed","person-lines-fill");
        $random_color=randomHEX(5);
        $split=str_split($random_color,7);
        $types=ItemType::selection()->where('shop_id','21036')->get();
        return view('V1.search',compact('types','split','icons'));
    }

    public function searchItem(Request $request)
    {
        $items=ItemType::where('name','like','%'.$request->get('searchRequest').'%')->get();
        return json_encode($items);
    }
}
