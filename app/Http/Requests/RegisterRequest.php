<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|alpha_dash|unique:users',
            'password' => 'required|min:6|same:konfirmasi_password',
            'konfirmasi_password' => 'required|min:6|same:password',
            'foto' => 'file|image|max:1000',
        ];
    }
}
