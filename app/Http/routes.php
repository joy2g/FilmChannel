<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stream', function () {
	return view('stream');
});

Route::get('/hello', [
    'as' => 'hello',
    'uses' => 'Video\VideoController@getVideo'
    ]);

require __DIR__.'/Route/admin_route.php';
