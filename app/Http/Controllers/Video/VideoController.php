<?php

namespace App\Http\Controllers\Video;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Route;
use App\Video;

class VideoController extends Controller
{
    const API_KEY = 'AIzaSyCYgUWLzu9XtnTv1sULCc9j0VJpJpOOOrY';

    const URL = 'https://www.googleapis.com/youtube/v3/playlistItems';

    const PLAYLIST_ID = 'PL23pMTVL5im3qyhOTvR956QyyvBkF5N7h';

    public function createVideo()
    {
        $parameters = [
            'query' => [
                'part' => 'snippet',
                'key' => self::API_KEY,
                'playlistId' => self::PLAYLIST_ID
            ],
            'decode_content' => false
        ];

        $client = new \GuzzleHttp\Client();

        $res = $client->get('https://www.googleapis.com/youtube/v3/playlistItems', $parameters);
        $data = json_decode($res->getBody(), true);
        $videoArr = [];
        foreach ($data['items'] as $item) {
            $title = $item['snippet']['title'];
            $description = $item['snippet']['description'];
            $small_thumnail = $item['snippet']['thumbnails']['medium']['url'];
            $medium_thumnail = $item['snippet']['thumbnails']['high']['url'];
            $large_thumnail = $item['snippet']['thumbnails']['maxres']['url'];
            $episode = $item['snippet']['position'] + 1;
            $youtube_id = $item['snippet']['resourceId']['videoId'];
            $params = [
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

    public function getVideo()
    {
        $videos = Video::select('title', 'medium_thumnail')
            ->skip(0)
            ->take(5)
            ->get();

        return view('home', compact('videos'));
    }
}
