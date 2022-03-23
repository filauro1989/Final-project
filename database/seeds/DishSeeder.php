<?php

use Illuminate\Database\Seeder;
use App\Dish;
use App\User;
use App\Course;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all()->first();
        $course = Course::all()->first();

        $newDish = new Dish();
        $newDish->user_id = $user->id;
        $newDish->course_id = $course->id;
        $newDish->name = 'margherita';
        $newDish->description = 'Pizza margherita con pomodoro mozzarella e tanto amore';
        $newDish->price = 275.25;
        $newDish->image = 'dishes_img/margherita.jpg';
        $newDish->visible = 1;
        $newDish->save();
    }
}
