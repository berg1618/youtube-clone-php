@extends('layouts.main')

@section('content')
    <form action="{{ route('videos.store') }}" method="post" enctype="multipart/form-data"  id="video">
        @csrf
        <label for="name">name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="description">description:</label><br>
        <input type="text" id="description" name="description"><br>
        <label for="file">file:</label><br>
        <input type="file" id="file" name="file"><br>
    </form>
    <button form="video" type="submit">submit</button>
@endsection
