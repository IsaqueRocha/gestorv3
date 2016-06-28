<?php

use Illuminate\Database\Seeder;

class DigitalComplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');

        DB::table('digital_complements')->insert([
            [
                'opening_chapters'       => 4,
                'opening_chapters_done'      => 5,
                'digitalmark_id'    => 2,
            ],
         ]);

    }
}
