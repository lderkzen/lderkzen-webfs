<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
{
    public $employee;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'employee_nr' => ['required', 'numeric', 'exists:employees'],
            'password' => ['required']
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $this->employee = Employee::find($this['employee_nr']);

            if (!$this->employee || !Hash::check($this['password'], $this->employee->password)) {
                $validator->errors()->add('all', 'Onbekende combinatie medewerker nummer en wachtwoord');
            }
        });
    }
}
