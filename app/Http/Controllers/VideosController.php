<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        Video::find(1);
    }

    public function store(Request $request)
    {
        $video = new Video();
        $video->create([
            $request
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
