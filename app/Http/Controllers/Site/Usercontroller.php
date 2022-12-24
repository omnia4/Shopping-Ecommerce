<?php

namespace App\Http\Controllers\Site;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Eidtprofilerequest;
use App\Models\Client;
use Cart;
use Auth;
use App\Models\Item;
use App\Models\ItemRate;
use App\Models\RequestDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
         $cartItems = Cart::getContent();
         return view('V1.orderdetails',compact('cartItems'));
     }
     public function view(){
         $client=RequestDetail::all();
         return view('V1.viewdetalis',compact('client'));
    }
    public function profile(Request $request)
    {
        $user  = Auth::user();
         //dd($user);
         $user_name =  $user ->user_name ;
         $user_Tel = $user->mobile1;
         $user_Password = $user->password;
         $user_email = $user->email;

        return view('V1.home.EditProfile',compact('user_name','user_Tel','user_Password','user_email'));
    }


    public function edit()
        {
                return view('V1.home.EditProfile');
        }
        
    public function UpdateProfile(Request $request){
        $user_update = auth()->User();
        // dd( $request->all());

        //$this -> validate ($request,
        // [
        //   'user_name'  => 'required' ,
        //   'email'  => 'required|email',
        //   'mobile1'  => 'required',
        //   'password'  => 'required',
          
        // ]);

        $validated = $request->validate([
            'user_name'  => 'required' ,
            'email'  => 'required|email',
            'mobile1'  => 'required',
        ]);
       
        $test=$user_update->update ([

                'user_name'=>$request->user_name,
                'email'=>$request->email,
                'mobile1'=>$request->mobile1,
                'shop_id'=>21036,

        ]) ;
        //dd($test);
        return redirect()->back();

    }
//     public function index()
//     {
//         $cartItems = Cart::getContent();
//         return view('V1.orderdetails',compact('cartItems'));
//     }
//     public function view(){
//         $client=RequestDetail::all();
//         return view('V1.viewdetalis',compact('client'));
//    }
//     public function edit()
//     {
//             return view('V1.auth.editprofile');
//     }


//     public function update_Profile(Eidtprofilerequest $request)
//     {
//         try{
//             $clients=Client::create([
//                 'client_name'=>$request->user_name,
//                 'email'=>$request->email,
//                 'mobile1'=>$request->mobile1,
//                 'address_area'=>$request->address_area,
//             ]);

//             if($clients){
//                 $request->session()->flash('alert-success','YourAccount updated Successfuly');
//                 return redirect()->route('home');
//             }
//         }catch(Exception $ex)
//         {
//             $request->session()->flash('alert-danger','SomeThing Went Wrong Please Try Again');
//             return redirect()->route('edit_Profile');
//         }
//     }
}
