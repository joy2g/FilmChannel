<?php

/**
 * Route for playlist
 */

Route::group(['prefix' => 'admin'], function () {
    Route::resource('playlist', 'Video\PlaylistController');
});
