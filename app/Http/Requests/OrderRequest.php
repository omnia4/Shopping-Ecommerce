<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        // dd(request()->all());
        return [
           'client_name'=>'required',
           'address'=>'required',
           'email'=>'required',
        //    'lat'=>'required',
        //    'lon'=>'required',
           'mobile'=>'required',
           'payment_method'=>'required',
           'trans_img' => 'required_if:payment_type,==,2'

        ];
    }



}
