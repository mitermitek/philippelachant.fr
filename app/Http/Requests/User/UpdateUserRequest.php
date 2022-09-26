<?php

namespace App\Http\Requests\User;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:5', 'max:255', 'unique:users,name,' . $this->user->id],
            'email' => ['required', 'email', 'unique:users,email,' . $this->user->id],
            'password' => ['nullable', 'confirmed', 'min:6']
        ];
    }
}
