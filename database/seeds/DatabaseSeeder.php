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
        $this->call('ProjectTableSeeder');
        $this->call('ProjectTypeTableSeeder');
        $this->call('ProjectUserTableSeeder');
        $this->call('FormatTableSeeder');
        $this->call('DigitalMarkSeeder');
        $this->call('DigitalComplementSeeder');

        Model::reguard();
    }
}
