<?php

namespace App\Providers\Admin\Playlist;

use Illuminate\Support\ServiceProvider;
use App\Playlist;

class PlaylistProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Playlist::created(function ($playlist) {
            $temp = new Playlist();
            $temp->savePlaylistVideos($playlist->id, $playlist->youtube_id);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
