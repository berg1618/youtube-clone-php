<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        $videos =  Video::all();
        return view('videos.index', ['videos' => $videos]);
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $video = new Video();
        $video->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'user_id' => $request->get('user_id'),
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }

    public function show(Video $video)
    {
        //
    }


    public function update(Request $request, Video $video)
    {
        //
    }

    public function destroy(Video $video)
    {
        //
    }
}
