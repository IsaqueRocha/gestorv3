<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            ['name' => 'Artes Visuais', 'tinyname' => 'art'],
            ['name' => 'Biologia', 'tinyname' => 'bio'],
            ['name' => 'Dimensões da Humanização', 'tinyname' => 'hum'],
            ['name' => 'Educação Física', 'tinyname' => 'edf'],
            ['name' => 'Filosofia', 'tinyname' => 'fil'],
            ['name' => 'Física', 'tinyname' => 'fis'],
            ['name' => 'História', 'tinyname' => 'his'],
            ['name' => 'Pedagogia', 'tinyname' => 'ped'],
            ['name' => 'Química', 'tinyname' => 'qui'],
            ['name' => 'Educação do Campo', 'tinyname' => 'edc'],
            ['name' => 'Educação em Direitos Humanos', 'tinyname' => 'edh'],
            ['name' => 'Matemática', 'tinyname' => 'mat'],
            ['name' => 'Epidemiologia', 'tinyname' => 'epi'],
        ]);
    }
}
