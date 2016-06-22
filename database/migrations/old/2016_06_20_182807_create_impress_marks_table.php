<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpressMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impress_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('metting')->default(false);
            $table->string('briefing');
            $table->integer('format_id');
            $table->integer('paper_id');
            $table->integer('eartext_id');
            $table->boolean('eartext_exists');
            $table->integer('pages');
            $table->boolean('cover');
            $table->boolean('layout_approval');
            $table->integer('dool');
            $table->boolean('dool_exists');
            $table->integer('cataloguing_id');
            $table->integer('cataloguing_exists');
            $table->integer('creditsapproval_id');
            $table->integer('isbnrequest_id');
            $table->string('isbn');
            $table->boolean('isbn_exists');
            $table->boolean('pdf');
            $table->boolean('coord_revision');
            $table->string('memo');
            $table->boolean('memo_exists');
            $table->integer('printtest_id');
            $table->boolean('printtest_exists');
            $table->string('printshop');
            $table->boolean('printshop_exists');
            $table->integer('complements_id');
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
        Schema::drop('impress_marks');
    }
}
