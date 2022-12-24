<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use DateTime;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerShow(Request $request)
    {
        $email = $request->email ?? "";


          return view('V1.auth.register',compact('email'));



    }

    public function store(RegisterRequest $request)
    {

        try{
            $clients=Client::create([
                'user_name'=>$request->user_name,
                'email'=>$request->email,
                'mobile1'=>$request->mobile1,
                'password'=>bcrypt($request->password),
                'client_name'=>$request->user_name,
                'shop_id'=>21036,
            ]);
            auth()->login($clients);
            if($clients){
                $request->session()->flash('alert-success','YourAccount Created Successfuly');
                return redirect()->route('home');
            }
        }catch(Exception $ex)
        {

            // return $ex;
            $request->session()->flash('alert-danger','SomeThing Went Wrong Please Try Again');
            return redirect()->route('register.show');
        }
    }
}
