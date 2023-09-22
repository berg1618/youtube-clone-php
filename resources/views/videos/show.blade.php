@extends('layouts.main')

@section('content')
    <section class="flex items-center flex-col">
        <video width="890" height="500" controls>
            <source src="storage/app/public/video/bangela.mp4" type="video/mp4">
        </video>

        <div class="w-1/2">
            <div class="text-xl font-bold">{{ $video->name }}</div>
            <div class="text-[555]">
                <span>12K views</span>
                •
                <span>{{$video->created_at}}</span>
            </div>
            <div class="text-sm">{{ $video->description }}</div>
        </div>
    </section>
@endsection
