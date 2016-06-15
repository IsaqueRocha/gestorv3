<?php

use Illuminate\Database\Seeder;

class ProjectUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');
        for ($i=0; $i < 50; $i++) {
            DB::table('project_user')->insert([
                [
                    'project_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                    'user_id'    => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                    'updated_at' => \Carbon\Carbon::now(),
                    'created_at' => \Carbon\Carbon::now(),
                ],
             ]);
         }
    }
}
