<?php

use Illuminate\Database\Seeder;

class DigitalMarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');

        DB::table('digital_marks')->insert([
            [
                'metting'       => 1,
                'briefing'      => 'Some random strings.',
                'project_id'    => 1,
                'format_id'     => 1,
            ],
         ]);

    }
}
