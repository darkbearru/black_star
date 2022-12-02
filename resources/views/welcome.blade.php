<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/js/app.js')
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @else
                <a href="" class="absolute right-5 top-5 bg-indigo-500 hover:bg-indigo-600 px-5 py-2 text-white rounded-lg">Log in</a>
                <div class="absolute z-10 right-5 bottom-5 p-4 space-y-2 max-w-2xl bg-indigo-100 rounded transition-all delay-300">
                    <div class="border-b border-indigo-300 pb-2 flex justify-items-stretch items-center">
                        <h3 class="text-lg font-medium flex-grow">Responsive Design</h3>
                        <div class="w-5 h-5 border-2 border-indigo-500 rounded-3xl"></div>
                    </div>
                    <div class="">
                        <p>Every utility class in Tailwind can be applied conditionally at different breakpoints, which makes it a piece of cake to build complex responsive interfaces without ever leaving your HTML.</p>
                    </div>
                </div>
                <div class="w-8 h-8">
                    <svg  class="stroke-indigo-500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="50" cy="50" r="40" fill="none" stroke-width="8" stroke-linecap="round" class="svg-circle" stroke-dasharray="314" transform="rotate(-80 50 50)">
                            <animate attributeName="stroke-dashoffset" dur="5s" to="314" from="0" fill="freeze"></animate>
                        </circle>
                    </svg>
                </div>

            @endif
        </div>
    </body>
</html>
