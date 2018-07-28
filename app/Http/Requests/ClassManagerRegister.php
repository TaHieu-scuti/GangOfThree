<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassManagerRegister extends FormRequest
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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'avatar' => 'max:10000|mimes:jpeg,png,jpg',
            'fullname' => 'required|string|max:100',
            'facebook' => 'string|max:255|nullable',
            'skype' => 'string|max:255|nullable',
            'degree' => 'string|max:100|nullable',
            'description' => 'string|nullable',
        ];
    }
}
