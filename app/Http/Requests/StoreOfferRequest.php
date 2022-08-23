<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'extra_info' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0', 'max:999.99'],
            'valid_from' => ['nullable', 'date', 'before_or_equal:valid_from'],
            'valid_until' => ['nullable', 'date', 'after:today'],
            'dishIds' => ['required', 'array', 'min:1'],
            'dishIds.*' => ['numeric']
        ];
    }
}
