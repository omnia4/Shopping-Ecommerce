<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>'required|max:191|string',
            'email'=>'required|max:150|email|unique:clients|string',
            'comtact_msg'=>'required',
        ];

    }
    public function messages()
    {
        return[
            'email'=>'Please Enter Valid Email',
            'name'=>'required|max:191|string|min:4',
            'email'=>'required|max:150|email|unique:clients|string',
            'comtact_msg'=>'required',

        ];
    }
}
