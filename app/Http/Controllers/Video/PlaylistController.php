<?php

namespace App\Http\Controllers\Video;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Admin\Playlist\CreateRequest;
use App\Http\Controllers\Controller;
use App\Playlist;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $playlist = new Playlist();
        $category = ['Action', 'Romance'];
        return view('admin.playlist.create', compact('playlist', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $client = new \GuzzleHttp\Client();

        $params = [
            'query' => [
                'part' => 'snippet,contentDetails',
                'key' => config('config_youtube.API_KEY'),
                'maxResults' => config('config_youtube.MAX_RESULTS'),
                'id' => $request->input('youtube_id')
            ]
        ];

        $response = $client->request('Get', config('config_youtube.PLAYLIST_API_URL'), $params);

        $json = json_decode($response->getBody(), true);

        $requestColumns = $request->all();

        $apiColumns = [
            'small_thumnail' => $json['items'][0]['snippet']['thumbnails']['medium']['url'],
            'medium_thumnail' => $json['items'][0]['snippet']['thumbnails']['high']['url'],
            'large_thumnail' => $json['items'][0]['snippet']['thumbnails']['maxres']['url'],
            'episode_count' => $json['items'][0]['contentDetails']['itemCount']
        ];

        $columns = array_merge($requestColumns, $apiColumns);

        Playlist::create($columns);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
