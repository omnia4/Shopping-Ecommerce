<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\badrShop;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    public function term()
    {
        $terms = badrShop::all()->map(function ($term) {
            return collect($term)->only('shop_terms');
          });
//$terms= badrShop::pluck('shop_terms');
          return view('V1.terms',compact('terms'));

            }


}
