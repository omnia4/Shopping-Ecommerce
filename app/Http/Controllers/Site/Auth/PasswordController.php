<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Models\Client;
use Exception;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function showPass()
    {
        return view('V1.auth.password');
    }
    public function passwordChange(PasswordRequest $request)
    {
        try{
            $passwords=Client::where('email',$request->email);
            $updates=$passwords->update([
                'password'=>bcrypt($request->password),
            ]);
            if($updates){
                $request->session()->flash('alert-success','Your Password Change Successfuly');
                return redirect()->route('login.show');
            }
        }catch(Exception $ex)
        {
            $request->session()->flash('alert-danger','SomeThing Went Wrong Please Try Again');
            return redirect()->route('login.show');
        }
    }
}
