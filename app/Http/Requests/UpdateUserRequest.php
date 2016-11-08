<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'group_id' => 'required|digits_between:1,99999999999|exists:groups,id',
            'login' => 'required|max:255',
            'password' => 'min:4',
            'email' => 'required|email',
            'expiration_date_time' => 'required|date'
        ];
    }
}
