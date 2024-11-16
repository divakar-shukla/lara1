<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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


        //all these are same validation like you validate in controller but 
        //for custom error message you will have to create a function named messages
        return [
            'name'=>'required',
            'email'=>'required|email', 
            'password'=>'required|numeric|min:20',
            'token'=>'required',
        ];
    }

    public function messages(){
        return[
            'email.required'=>'Email Address is most important.',
            'token.required'=>':attribute must be filled.'
        ];
    }


    //show error message of laravel but want to put custom field name

    public function attributes(){
        return[
            "token"=> "your token "
        ];
    }
}
