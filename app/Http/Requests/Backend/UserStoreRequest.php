<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'dni'       => 'required|unique:users|min:8',
            'name'      => 'required|min:4|max:50',
            'last_name' => 'required|min:4|max:50',
            'email'     => 'required|email|unique:users,email',
        ];
    }
}
