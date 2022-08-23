<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'startdate' => ['required', 'date', 'before_or_equal:today'],
            'enddate' => ['required', 'date', 'after_or_equal:startdate']
        ];
    }
}
