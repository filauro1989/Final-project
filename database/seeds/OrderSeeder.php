<?php

use App\Order;
use App\User;
use App\Dish;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all()->first();

        $newOrder = new Order();
        $newOrder->user_id = $user->id;
        $newOrder->date = '2022-03-23 12:00:00';
        $newOrder->customer_email = 'compratore@gmail.com';
        $newOrder->delivery_address = 'via palo, 34';
        $newOrder->payment_method = 'card';
        $newOrder->total_amount = 75.34;
        $newOrder->save();
        
    }
}
