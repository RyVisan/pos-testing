<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:50',
            'phone' => 'nullable|digits_between:9,10|integer',
            'address' => 'max:255',
            'description' => 'max:255',
            'image' => 'mimes:jpeg,jpg,png',
        ];
    }
}
