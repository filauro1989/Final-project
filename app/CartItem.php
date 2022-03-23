<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'dish_id',
        'cart_id',
        'quantity',
        'price_historic',
    ];

    public function cart() {
        return $this->belongsTo('App\Cart');
    }
}
