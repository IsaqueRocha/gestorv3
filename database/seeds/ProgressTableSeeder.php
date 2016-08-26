<?php

use Illuminate\Database\Seeder;

class ProgressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('progress')->insert([
            [
                'title'         => 'Atividade Teste',
                'date'          => '2016-08-26',
                'start'         => '08:00',
                'finish'        => '09:00',
                'details'       => 'Teste de db',
                'project_id'    => 1,
                'user_id'       => 2,
            ],
        ]);
    }
}
