<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');

        for ($i=0; $i < 10; $i++) {
            DB::table('teachers')->insert([
                'name'           =>  "Professor".$i,
                'email'          =>  "professor".$i."@ufes.br",
                'phone'          =>  $faker->cellphoneNumber,
                'course_id'      =>  $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            ]);
        }
    }
}
