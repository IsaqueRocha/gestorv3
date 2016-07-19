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
            [
                'name'  => 'pdf',
                'type'  => 'digital',
            ],
            [
                'name'  => 'mobi',
                'type'  => 'digital',
            ],
            [
                'name'  => 'app',
                'type'  => 'digital',
            ],
            [
                'name'  => 'carta',
                'type'  => 'impress',
            ],
            [
                'name'  => 'quadrado',
                'type'  => 'impress',
            ],
            [
                'name'  => 'cartinha',
                'type'  => 'impress',
            ],
            [
                'name'  => 'outro',
                'type'  => 'impress',
            ],
         ]);
    }
}
