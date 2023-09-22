@extends('layouts.main')

@section('content')
    <section class="grid grid-cols-4 gap-y-6 gap-x-12 px-12 py-0 mx-0 my-6 border-t-4 border-solid border-[ccc]">
        <img class="w-100% h-100% bg-[aaa] min-w-250 min-h-150" src="{{ url("storage/app/public/{$video->path}") }}" />
        <div>{{$video->name}}</div>
        <div>{{$video->description}}</div>

    </section>
@endsection
