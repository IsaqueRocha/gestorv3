<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('RoleTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('CourseTableSeeder');
        $this->call('TeacherTableSeeder');
        $this->call('StatusTableSeeder');
        $this->call('TypesTableSeeder');

        Model::reguard();
    }
}
