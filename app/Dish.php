<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'name',
        'description',
        'price',
        'image',
        'visible',
    ];

    // public function orders() {
    //     return $this->belongsToMany('App\Order');
    // }

    public function course() {
        return $this->belongsTo('App\Course');
    }
}
