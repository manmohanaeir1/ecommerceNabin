<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareerRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required',
            'email'  => 'required | email ',
            'phone'  => 'required | regex:/^([0-9\s\-\+\(\)]*)$/ | min:9 | max:10',
            'address'  => 'required ',
            'cv'  => 'required | mimes:pdf,doc,docx,txt | max:2048',
            'image'  => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048' ,
            'expertise'  => 'required',
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
            'phone.digits' => 'Phone is invalid , insert  10 digits',
            'phone.digits_between' => 'Phone is invalid , between 0 to 9',



            'address.required' => 'Address is required',
            'cv.required' => 'CV is required',
            'cv.mimes' => 'CV is not valid , insert only [pdf,doc,docx,txt]',
            'cv.max' => 'CV is not valid, max size is 2MB',
            'image.mimes' => 'Image is not valid',
            'image.max' => 'Image is not valid, max size is 2MB',
            'image.image' => 'Image is not valid, insert only image ,[jpeg,png,jpg,gif,svg]',

            'image.required' => 'Image is required',
            'expertise.required' => 'Expertise is required',
            'message.required' => 'Message is required',
        ];
    }   
}
