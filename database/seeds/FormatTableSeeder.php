<?php

use Illuminate\Database\Seeder;

class FormatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('format')->insert([
            [
                'name'  => 'epub',
                'type'  => 'digital',
            ],
         ]);
    }
}
