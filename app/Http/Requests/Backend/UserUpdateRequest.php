<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'dni'       => 'required|min:8|unique:users,dni,'. $this->user->id,
            'name'      => 'required|min:4|max:50',
            'last_name' => 'required|min:4|max:50',
            'email'     => 'required|email|unique:users,email,'. $this->user->id,            
        ];
    }
}
