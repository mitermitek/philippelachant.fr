<?php

namespace App\Http\Requests\Topicality;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTopicalityRequest extends FormRequest
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
            'content' => ['required', 'string', 'min:1', 'max:160']
        ];
    }
}