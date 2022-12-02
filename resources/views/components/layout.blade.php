<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    @auth()
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    @endauth
    <title>{{ $title }}</title>
</head>
<body class="antialiased">
<div class="relative flex items-center justify-center min-h-screen bg-gray-100 sm:items-center py-0 sm:py-4">
    {{ $content }}
    @guest
        @if(!request()->is('login'))
            <x-form.button href="{{ route('login') }}" class="absolute right-5 top-5">Log In</x-form.button>
        @endif
    @else
        @if(!request()->is('admin'))
            <x-form.button href="{{ route('admin') }}" class="absolute right-5 top-5">Admin</x-form.button>
        @endif
    @endguest
</div>
</body>
</html>
