<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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

    public function rules(){
        return [
            'email'    => 'required|string|email' , 
            'password' => 'required|string' 
        ];
    }

    public function messages() {
        return [
            'email.required'     => 'Email Address field is Required',
            'password.required'  => 'Password field is Required',
        ];
    }

    public function attributes() {
        return [
            'email'    => 'Email Address',
            'password' => 'Password',
        ];
    }

    // public function filters(){
    //     return [
    //         'email' => 'trim|lowercase',
    //         'password' => 'trim'
    //     ];
    // }
}
