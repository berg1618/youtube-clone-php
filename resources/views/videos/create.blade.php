@extends('layouts.main')

@section('content')
    <form class="flex items-center flex-col" action="{{ route('videos.store') }}" method="post" enctype="multipart/form-data"  id="video">
        @csrf
        <label class="w-1/2" for="name">name:</label><br>
        <input class="bg-gray-100 border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 w-[600px]" type="text" id="name" name="name"><br>
        <label class="w-1/2" for="description">description:</label><br>
        <input class="bg-gray-100 border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 w-[600px]" type="text" id="description" name="description"><br>
        <label class="w-1/2" for="file">file:</label><br>
        <input class="bg-gray-100 border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 w-[600px]" type="file" id="file" name="file"><br>
    </form>
    <button class="rounded-lg border-indigo-300 bg-[#51ab6f] p-2 pl-5 pr-5 text-sm text-gray-100 flex relative items-end" form="video" type="submit">submit</button>
@endsection
