<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'roles';
    protected $fillable = ['role'];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'role_id', 'id');
    }
}
