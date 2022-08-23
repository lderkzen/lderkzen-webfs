<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'dish_nr' => ['required', 'string', 'max:4', 'unique:dishes'],
            'dish_type_id' => ['required', 'numeric', 'exists:dish_types,id'],
            'name' => ['required', 'string', 'max:245'],
            'price' => ['required', 'numeric', 'min:0', 'max:999.99'],
            'spice_level' => ['nullable', 'numeric', 'min:0', 'max:3'],
            'description' => ['nullable', 'string', 'max:500'],
            'allergyIds' => ['nullable', 'array'],
            'allergyIds.*' => ['numeric']
        ];
    }
}
