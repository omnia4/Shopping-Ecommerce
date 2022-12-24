<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

        return [
            'user_name'=>'required|max:191|string',
            'email'=>'required|max:150|email|unique:clients|string',
            'password'=>'required|max:60|min:8',
            'mobile1'=>'required|min:11|unique:clients|numeric',
            'agree'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'required'=>'This Field Is Required',
            'email'=>'Please Enter Valid Email',
            'user_name'=>'required|max:191|string|min:4',
            'email'=>'required|max:150|email|unique:clients|string',
            'password'=>'required|max:60|min:6',
            'mobile1'=>'required|min:11|unique:clients|numeric',
            'agree'=>'required',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ];
    }
}
