<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CocktailsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            's' => ['required', 'string', 'min:4'],
        ];
    }
}
