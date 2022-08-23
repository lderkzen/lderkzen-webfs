<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public $timestamps = false;
    protected $table = 'dishes';
    protected $fillable = ['dish_nr', 'dish_type_id', 'name', 'price', 'spice_level', 'description'];

    public function dishType()
    {
        return $this->belongsTo(DishType::class, 'dish_type_id');
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'dishes_sales', 'dish_id', 'sale_id')->withPivot('amount', 'comment', 'price');
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class, 'dishes_offers', 'dish_id', 'offer_id');
    }

    public function allergies()
    {
        return $this->belongsToMany(Allergy::class, 'allergies_dishes', 'dish_id', 'allergy_id');
    }
}
