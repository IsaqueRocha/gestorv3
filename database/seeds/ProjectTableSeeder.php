<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');

        for ($i = 0; $i < 10; ++$i) {
            DB::table('projects')->insert([
                [
                    'title' => 'Projeto '.$i,
                    'start' => \Carbon\Carbon::now(),
                    'deadline' => \Carbon\Carbon::now()->addWeeks(2),
                    'course_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                    'teacher_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                    'status_id' => $faker->randomElement([1, 2, 3, 4]),
                ],
             ]);
        }
    }
}
