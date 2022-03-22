<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'email',
        'address',
        'payment_method',
        'total_amount',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function dishes() {
        return $this->belongsToMany('App\Dish');
    }
}
