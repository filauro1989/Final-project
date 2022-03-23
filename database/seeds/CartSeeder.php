<?php

use Illuminate\Database\Seeder;
use App\Cart;
use App\CartItem;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartItem = CartItem::where('id', 1)->first();
        $newCart = new Cart();
        $newCart->total_amount = $cartItem->price_historic * $cartItem->quantity;
        $newCart->save();
    }
}
