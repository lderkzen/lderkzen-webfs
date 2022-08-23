<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps = false;
    protected $table = 'offers';
    protected $fillable = ['title', 'name', 'description', 'extra_info', 'price', 'valid_from', 'valid_until'];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'dishes_offers', 'offer_id', 'dish_id');
    }
}
