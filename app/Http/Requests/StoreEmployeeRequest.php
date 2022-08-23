<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'employee_nr' => ['required', 'numeric', 'min:1000', 'max:9999', 'unique:employees'],
            'password' => ['required', 'string', 'min:3', 'max:45'],
            'role_id' => ['required', 'numeric', 'exists:roles,id']
        ];
    }
}
