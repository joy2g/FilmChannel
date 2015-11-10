<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Video;

class Playlist extends Model
{
    use SoftDeletes;

	protected $table = 'playlists';

    protected $fillable = [
    	'id',
    	'youtube_id',
        'title',
    	'release_date',
    	'by',
        'category',
    	'age',
    	'description',
        'rating',
        'likes',
        'views',
        'reports',
        'episode_count',
    	'small_thumnail',
    	'medium_thumnail',
    	'large_thumnail'
    ];

    public function savePlaylistVideos ($playlistId, $playlistYoutubeId)
    {
        $parameters = [
            'query' => [
                'part' => 'snippet',
                'key' => config('config_youtube.API_KEY'),
                'playlistId' => $playlistYoutubeId,
                'maxResults' => config('config_youtube.MAX_RESULTS')
            ],
            'decode_content' => false
        ];

        $client = new \GuzzleHttp\Client();

        $res = $client->get(config('config_youtube.PLAYLIST_ITEM_API_URL'), $parameters);

        $data = json_decode($res->getBody(), true);

        foreach ($data['items'] as $item) {
            $title = $item['snippet']['title'];
            $description = $item['snippet']['description'];
            $small_thumnail = $item['snippet']['thumbnails']['medium']['url'];
            $medium_thumnail = $item['snippet']['thumbnails']['high']['url'];
            $large_thumnail = $item['snippet']['thumbnails']['maxres']['url'];
            $episode = $item['snippet']['position'] + 1;
            $youtube_id = $item['snippet']['resourceId']['videoId'];
            $params = [
                'playlist_id' => $playlistId,
                'title' => $title,
                'description' => $description,
                'small_thumnail' => $small_thumnail,
                'medium_thumnail' => $medium_thumnail,
                'large_thumnail' => $large_thumnail,
                'episode' => $episode,
                'youtube_id' => $youtube_id
            ];
            Video::create($params);
        }
    }
}
