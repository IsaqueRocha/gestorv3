<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_schedules', function(Blueprint $table){
            $table->increments('id');
            $table->string('seg_am')->nullable()->default(NULL);
            $table->string('ter_am')->nullable()->default(NULL);
            $table->string('qua_am')->nullable()->default(NULL);
            $table->string('qui_am')->nullable()->default(NULL);
            $table->string('sex_am')->nullable()->default(NULL);
            $table->string('seg_pm')->nullable()->default(NULL);
            $table->string('ter_pm')->nullable()->default(NULL);
            $table->string('qua_pm')->nullable()->default(NULL);
            $table->string('qui_pm')->nullable()->default(NULL);
            $table->string('sex_pm')->nullable()->default(NULL);
            $table->integer('user_id')->unsigned()->dafault(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('work_schedules');
    }
}
