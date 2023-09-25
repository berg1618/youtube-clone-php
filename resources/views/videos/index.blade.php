@extends('layouts.main')

@section('content')
    <section class="grid grid-cols-4 gap-y-6 gap-x-12 px-12 py-0 mx-0 my-6 border-t-4 border-solid border-[ccc]">

        @foreach ($videos as $video)
            <article class="flex flex-col">
                <a href="#" class="flex relative" data-duration="00:00">
                    <video class="w-250 h-150 bg-[aaa] max-w-xs max-h-80" controls>
                        <source src="{{ asset("storage/{$video->path}") }}" type="video/mp4">
                    </video>
                </a>
                <div class="flex items-start mt-4">
                    <a href="#">
                        <img class="mr-3 rounded-[50%] w-9 h-9 bg-[aaa]" src="http://unsplash.it/36/36?gravity=center" />
                    </a>
                    <div class="flex flex-col">
                        <a href="{{ route('videos.show', $video->id) }}"
                            class="font-bold black text-[1.1rem]">{{ $video->name }}</a>
                        <a href="#" class="mb-0.5 transition-colors">{{ $video->user->name }}</a>
                        <div class="text-[555]">
                            <span>12K views</span>
                            •
                            <span>{{ $video->created_at }}</span>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

    </section>
@endsection
