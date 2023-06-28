<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Database\Factories\LessonFactory;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            Lesson::factory()->count(3)->create([
                'course_id' => $course->id,
            ]);
        }
    }
}
