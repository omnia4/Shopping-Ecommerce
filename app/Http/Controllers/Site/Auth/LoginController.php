<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\ItemType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function loginShow()
    {
        $categories=ItemType::where('shop_id','21036')->with('subCategories')->selection()->paginate(10);
        $contacts=DB::table('badr_shop')->join('contacts','contacts.shop_id' ,'=' ,'badr_shop.serial_id')
        ->select('badr_shop.about','badr_shop.telephone','badr_shop.email','contacts.facebook','contacts.twitter','contacts.youtube','contacts.instagram','contacts.google')
        ->first();
        return view('V1.auth.login',compact('contacts','categories'));
    }
    public function login(LoginRequest $request)
    {
        try{
            if(auth()->attempt(['user_name'=>$request->user_name,'password'=>$request->password]) || auth()->attempt(['mobile1'=>$request->user_name,'password'=>$request->password]) ||auth()->attempt(['email'=>$request->user_name,'password'=>$request->password]))
            {
                return redirect()->route('home')->with('success',"You are logged in");
            }else{
                return back()->withErrors([
                    'user_name' =>'The provided credentials do not match our records.',
                ])->onlyInput('user_name');
            }
        }catch(Exception $ex)
        {
            return redirect()->route('login.show')->with(['error'=>trans('main_trans.Something Went Wrong Please Try Again')]);
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login.show')->with(['alert'=>"You left"]);    }
}
