<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('youtube_id')->unique()->nullable();
            $table->string('title');
            $table->string('release_date');
            $table->string('by');
            $table->string('category');
            $table->tinyInteger('age');
            $table->text('description');
            $table->float('rating');
            $table->integer('views');
            $table->integer('likes');
            $table->integer('reports');
            $table->integer('episode_count');
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
        Schema::drop('playlists');
    }
}
