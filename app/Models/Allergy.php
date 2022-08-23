<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    public $timestamps = false;
    protected $table = 'allergies';
    protected $fillable = ['allergy'];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'allergies_dishes', 'allergy_id', 'dish_id');
    }
}
