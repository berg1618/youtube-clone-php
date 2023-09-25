<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Youbute</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="flex items-center p-6 justify-between">
        <a href="{{ route('videos.index') }}">
            <img src="{{ asset('logo.png')}}" alt="YouTube Logo" class="h-8" />
        </a>
        <form class="flex mt-0 mr-8 mb-0 ml-16">
            <input class="p-[.4em] border-solid border-gray-[777] border-2 rounded-tl-3xl rounded-bl-3xl w-full"
                type="search" placeholder="Search" aria-label="Search" />
            <button type="submit"
                class="flex p-0 pl-5 items-center border-solid border-gray-[777] border-2 bg-[f8f8f8] rounded-tr-3xl rounded-br-3xl bl-0 cursor-pointer">
                <img src="{{ asset('magnify.svg') }}" />
            </button>
        </form>
        <div class="grid items-center gap-6 grid-cols-4">
            <a href="{{ route('videos.create') }}">
                <img src="{{ asset('video-plus.svg') }}" alt="Upload Video" />
            </a>
            <a href="#">
                <img src="{{ asset('apps.svg') }}" alt="Apps" />
            </a>
            <a href="#">
                <img src="{{ asset('bell.svg') }}" alt="Notifications" />
            </a>
            <a href="{{ route('profile.edit') }}">
                <img class="w-9 h-9 rounded-3xl" src="{{ asset('bangela.jpeg') }}" alt="Your Channel" />
            </a>
        </div>
    </header>
    @yield('content')
</body>

</html>
