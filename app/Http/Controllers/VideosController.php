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

    public function store(Request $request, Video $video)
    {

        $data = $request->all();

        $request->validate([
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $data['path'] = $request->file->store('video');

        $video->create([
            ...$data,
            'user_id' => $request->get('user_id') || 1,
            'created_at' => time(),
            'updated_at' => time()
        ]);

        return redirect()->route('videos.index')->with('success', 'File Uploaded Successfully');

    }

    public function show(Video $video)
    {
        return view('videos.show', ['video' => $video]);
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
