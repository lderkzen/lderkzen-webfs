<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = false;
    protected $table = 'sales';
    protected $fillable = ['created_at'];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'dishes_sales', 'sale_id', 'dish_id')->withPivot('amount', 'comment', 'price');
    }
}
