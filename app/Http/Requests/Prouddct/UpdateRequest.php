<?php

namespace App\Http\Requests\Prouddct;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id'       => ['required'],
            'category_id'   => ['required'],
            'name'          => ['required', 'string'],
            'price'         => ['required', 'numeric'],
            'image'         => 'required|image|max:10240|dimensions:max_width=3000,max_height=3000 |mimes:jpeg,jpg,png'
        ];
    }
}
