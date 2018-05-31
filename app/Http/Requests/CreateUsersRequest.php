<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsersRequest extends FormRequest
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
            'name-user' => 'required',
            'email-user' => 'email|required',
            'password' => 'required|confirmed',
            'roles' => 'required',
            'avatar-user' => 'required|image',
        ];
    }
}
