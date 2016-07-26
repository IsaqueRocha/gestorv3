
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitalMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('metting')->default(false);
            $table->string('briefing');
            $table->integer('chapters');
            $table->integer('chapters_done');
            $table->boolean('cover')->default(false);
            $table->boolean('authorcv')->default(false);
            $table->integer('cataloguing_id')->unsigned();
            $table->integer('creditsapproval_id')->unsigned();
            $table->integer('revision_id')->unsigned();
            $table->integer('isbnrequest_id')->unsigned();
            $table->string('isbn');
            $table->boolean('coord_revision')->default(false);
            $table->boolean('organization')->default(false);
            $table->boolean('upload')->default(false);
            $table->boolean('transfer')->default(false);
            $table->integer('format_id')->unsigned();
            //complements
            $table->integer('opening_chapters');
            $table->integer('opening_chapters_done');
            $table->boolean('opening_chapters_exists');
            $table->integer('animation2d');
            $table->integer('animation2d_done');
            $table->boolean('animation2d_exists');
            $table->integer('animation3d');
            $table->integer('animation3d_done');
            $table->boolean('animation3d_exists');
            $table->integer('formulas');
            $table->integer('formulas_done');
            $table->boolean('formulas_exists');
            $table->integer('photografs');
            $table->integer('photografs_done');
            $table->boolean('photografs_exists');
            $table->integer('ilustrations');
            $table->integer('ilustrations_done');
            $table->boolean('ilustrations_exists');
            $table->integer('modeling3d');
            $table->integer('modeling3d_done');
            $table->boolean('modeling3d_exists');
            $table->integer('development');
            $table->boolean('development_exists');
            $table->integer('tables');
            $table->integer('tables_done');
            $table->boolean('tables_exists');
            //foreign keys
            $table->integer('project_id')->unsigned()->dafault(0);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('format_id')->references('id')->on('formats');
            //timestamps
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
        Schema::drop('digital_marks');
    }
}
