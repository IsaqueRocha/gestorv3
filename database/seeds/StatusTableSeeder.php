<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('status')->insert([
            ['name' => 'Na fila'],
            ['name' => 'Em andamento'],
            ['name' => 'Parado'],
            ['name' => 'Finalizado'],
        ]);
    }
}
