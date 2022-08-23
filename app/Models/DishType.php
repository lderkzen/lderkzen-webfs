<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DishType extends Model
{
    public $timestamps = false;
    protected $table = 'dish_types';
    protected $fillable = ['type'];

    public function dishes()
    {
        return $this->hasMany(Dish::class, 'dish_type_id');
    }
}
