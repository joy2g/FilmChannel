<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
	use SoftDeletes;

	protected $table = 'videos';

    protected $fillable = [
    	'id',
    	'youtube_id',
    	'playlist_id',
    	'episode',
    	'name',
    	'title',
    	'description',
    	'small_thumnail',
    	'medium_thumnail',
    	'large_thumnail'
    ];
}
