<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@ldiufes.org',
            'role_id' => '0',
            'password' => bcrypt('ldiufes'),
        ]);
    }
}
