<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'total_amount',
    ]; 

    public function order() {
        return $this->hasOne('App\Order');
    }

    public function cartItems() {
        return $this->hasMany('App\CartItem');
    }
}
