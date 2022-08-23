<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'employee_nr' => ['required', 'numeric', 'min:1000', 'max:9999'],
            'password' => ['nullable', 'string', 'max:45'],
            'role_id' => ['required', 'numeric', 'exists:roles,id']
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this['password'] === null)
                unset($this['password']);
        });
    }
}
