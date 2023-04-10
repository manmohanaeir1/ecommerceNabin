<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //has permission to create contact
        return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required',
            'email'  => 'required | email ',
            'phone'  => 'required   | regex:/^([0-9\s\-\+\(\)]*)$/ | min:9 | max:10',
            'subject'  => 'required ',
            'message'  => 'required',

        ];


    }
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'phone.required' => 'Phone is required',
            'phone.numeric' => 'Phone is invalid , insert only digits',
            
            'subject.required' => 'Subject is required',
            'message.required' => 'Message is required',

        ];
    }
    
}
