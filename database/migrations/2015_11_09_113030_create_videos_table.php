<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('youtube_id')->unique();
            $table->integer('playlist_id')->index()->unsigned()->nullable();
            $table->integer('episode');
            $table->string('title', 60);
            $table->string('description');
            $table->string('small_thumnail');
            $table->string('medium_thumnail');
            $table->string('large_thumnail');
            $table->softDeletes();
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
        Schema::drop('videos');
    }
}
