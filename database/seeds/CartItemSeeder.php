<?php

use Illuminate\Database\Seeder;
use App\Dish;
use App\CartItem;
use App\Cart;
use Illuminate\Validation\Rules\Exists;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dish = Dish::where('id', 1)->first();
        $newCartItem = new CartItem();
        $newCartItem->quantity = 3;
        $newCartItem->price_historic = $dish->price;
        $newCartItem->dish_id = 1;

        // MANCA LA RELAZIONE TRA CLIENTE E CARRELLO
        
        if ($newCartItem->cart_id) {
            $newCartItem->cart_id = 1;
        } else {
            $newCart = new Cart();
            $newCart->total_amount = $newCartItem->quantity * $newCartItem->price_historic;
            $newCart->save();
            $newCartItem->cart_id = $newCart->id;
        }
        $newCartItem->save();
    }
}
