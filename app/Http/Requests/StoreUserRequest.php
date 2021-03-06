<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "email" => "unique:users,email|max:255",
            "name" => "max:255|regex:/^[\p{L}\s'.-]+$/u",
            "phone" => "min:6|max:20|regex:/^[0-9]*$/",
            "address" => "max:255",
        ];
    }
}
