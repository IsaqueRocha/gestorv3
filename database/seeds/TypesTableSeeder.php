<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['name' => 'Livro Digital'],
            ['name' => 'Livro Impresso'],
            ['name' => 'Moodle'],
            ['name' => 'Vídeo'],
            ['name' => 'Web'],
            ['name' => 'Interativo'],
        ]);
    }
}
