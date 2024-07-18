<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body>

    <nav class="fixed w-full top-0 right-0 left-0 h-24 bg-[#171717] flex items-center justify-between px-5">
        <div class="bg-white px-4 rounded-full flex items-center">
            @if (Auth::user())
                <img src="{{ asset('avatar.svg') }}" width="35" class="rounded-full" alt="Avatar">
                <p class="font-[Poppins] text-sm font-medium">{{ Auth::user()->name }}</p>
            @endif
        </div>
        @if (Auth::user())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    class="bg-red-500 text-white font-[Poppins] font-medium py-1 px-4 rounded-full flex items-center">
                    LOGOUT
                </button>
            </form>
        @endif
    </nav>

</body>

</html>
