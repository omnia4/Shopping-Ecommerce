<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\BadrShop;
use App\Models\Client;
use App\Models\contact_us;
use App\Models\Page;
use DateTime;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
 {
    $contact=contact_us::all();
  return view('V1.contact',compact('contact'));
 }
 public function showaboutus(){
$about =  BadrShop::where('serial_id', 21036)->first()->about;

    return view('V1.about' ,compact('about'));
 }
 public function showread(){
    $pages=Page::all();
    return view('V1.readmore',compact('pages'));
 }

 public function store(ContactRequest $request)
    {
        if(auth()->attempt(['name'=>$request->user_name,'password'=>$request->password]) || auth()->attempt(['mobile1'=>$request->user_name,'password'=>$request->password]) ||auth()->attempt(['email'=>$request->user_name,'password'=>$request->password]))
        {
            $contact=contact_us::create(['comtact_msg'=>$request->comtact_msg,]);
        }
      else{
        $contact=contact_us::create([
                'email'=>$request->email,
                'comtact_msg'=>$request->comtact_msg,
                'name'=>$request->name,
            ]);
                $request->session()->flash('alert-success','Your Message Created Successfuly');
                return redirect()->route('home');
            }
            $request->session()->flash('alert-danger','SomeThing Went Wrong Please Try Again');
            return redirect()->route('contact.show');
        }
}
