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
        $user = request()->route('user');

        $emailRule = 'required|email:rfc,dns|unique:users,email';
        $usernameRule = 'required|unique:users,username';

        if ($user) {
            $emailRule .= ',' . $user->id;
            $usernameRule .= ',' . $user->id;
        }

        return [
            'name' => 'required',
            'email' => $emailRule,
            'username' => $usernameRule,
        ];
    }
}
