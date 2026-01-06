<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles / Scripts -->
    </head>
    <body class="bg-white min-h-screen flex flex-col">
        <header class="w-full px-6 py-4">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ route('notes.index')}}"
                            class="inline-block px-5 py-1.5 border-gray-300 hover:border-gray-400 border text-gray-800 rounded-sm text-sm leading-normal"
                        >
                            Notes
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 text-gray-800 border border-transparent hover:border-gray-300 rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 border-gray-300 hover:border-gray-400 border text-gray-800 rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        
        <main class="flex-1 flex items-center justify-center">
            <h1 class="text-7xl text-gray-800">All Your Notes</h1>
        </main>
    </body>
</html>
