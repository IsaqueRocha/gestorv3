<?php

use Illuminate\Database\Seeder;
use App\User;
use App\WorkSchedule;

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
            'cpf' => '111.111.111-11',
            'phone' => '(27) 4009-2099',
            'address' => 'Av. Fernando Ferrari, 514, Goiabeiras, Vitória - ES - CEP 29075-910',
            'role' => 'Admin',
            'area' => 'Master',
            'entrance_date' => \Carbon\Carbon::now(),
            'password' => bcrypt('ldiufes'),
        ]);

       \App\WorkSchedule::create([
           'seg_am' => '08:00 às 12:00',
           'seg_pm' => '13:00 às 17:00',
           'ter_am' => '08:00 às 12:00',
           'ter_pm' => '13:00 às 17:00',
           'qua_am' => '08:00 às 12:00',
           'qua_pm' => '13:00 às 17:00',
           'qui_am' => '08:00 às 12:00',
           'qui_pm' => '13:00 às 17:00',
           'sex_am' => '08:00 às 12:00',
           'sex_pm' => '13:00 às 17:00',
           'user_id' => \App\User::orderBy('id', 'desc')->first()->id,
       ]);

       $faker = \Faker\Factory::create('pt_BR');

        // User::truncate();


       for ($i=0; $i < 10; $i++) {
           DB::table('users')->insert([
               'name'           =>  $faker->name,
               'email'          =>  $faker->email,
               'cpf'            =>  $faker->cpf,
               'phone'          =>  $faker->cellphoneNumber,
               'address'        =>  $faker->address,
               'role'           =>  $faker->randomElement(["Coordenador", "Técnico", "Estagiário"]),
               'area'           =>  $faker->randomElement(["Diagramação", "Gerência", "Ilustração", "Vídeo", "Web"]),
               'entrance_date'  =>  \Carbon\Carbon::now(),
               'password'       =>  bcrypt('password'),
           ]);

           $user = User::orderBy('id', 'desc')->first();

           $user->work_schedule()->create([
               'seg_am' => '08:00 às 12:00',
               'seg_pm' => '13:00 às 17:00',
               'ter_am' => '08:00 às 12:00',
               'ter_pm' => '13:00 às 17:00',
               'qua_am' => '08:00 às 12:00',
               'qua_pm' => '13:00 às 17:00',
               'qui_am' => '08:00 às 12:00',
               'qui_pm' => '13:00 às 17:00',
               'sex_am' => '08:00 às 12:00',
               'sex_pm' => '13:00 às 17:00',
           ]);
       }
    }
}
