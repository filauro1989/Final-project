<?php

use App\Cart;
use App\CartItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(DishSeeder::class);
        $this->call(CartItemSeeder::class);
        $this->call(CartSeeder::class);
    }
}
