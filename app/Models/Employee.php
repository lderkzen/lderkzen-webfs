<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Employee extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'employees';
    protected $primaryKey = 'employee_nr';
    protected $fillable = ['employee_nr', 'password', 'role_id'];
    protected $hidden = ['password'];

    public function username()
    {
        return 'employee_nr';
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
