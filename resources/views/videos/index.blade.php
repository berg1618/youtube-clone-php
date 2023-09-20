@extends('layouts.main')

@section('content')
    <div> {{ $videos }} </div>
    <section class="grid grid-cols-4 gap-y-6 gap-x-80	">
        <article class="flex flex-col">
            <a href="#" class="flex relative" data-duration="12:24">
                <img class="w-100% h-100% bg-[aaa] min-w-250 min-h-150" src="http://unsplash.it/250/150?gravity=center" />
            </a>
            <div class="flex items-start mt-4">
                <a href="#">
                    <img class="mr-3 rounded-[50%] w-9 h-9 bg-[aaa]" src="http://unsplash.it/36/36?gravity=center" />
                </a>
                <div class="flex flex-col">
                    <a href="#" class="font-bold black text-[1.1rem]">Video Title</a>
                    <a href="#" class="mb-0.5 transition-colors">Channel Name</a>
                    <div class="text-[555]">
                        <span>12K views</span>
                        •
                        <span>1 week ago</span>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection
