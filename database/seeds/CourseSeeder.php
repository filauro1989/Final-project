<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newCourse = new Course();
        $newCourse->name = 'pizza';
        $newCourse->save();
    }
}
