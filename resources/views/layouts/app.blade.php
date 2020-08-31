<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-200 h-screen antialiased leading-none">
        <div id="app">
            <nav class="bg-blue-900 shadow mb-8 py-6">
                <div class="mx-auto px-6">
                    <div class="flex items-center justify-center">
                        <div class="mr-6">
                            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </div>
                        <div class="flex-1 text-right">
                            @guest
                                <a class="no-underline hover:underline text-gray-300 text-sm p-3"
                                   href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="no-underline hover:underline text-gray-300 text-sm p-3"
                                       href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                                <a href="{{ route('logout') }}"
                                   class="no-underline hover:underline text-gray-300 text-sm p-3"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            @endguest
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container mx-auto flex justify-center">
                @yield('content')
            </div>
        </div>
        <div class="flex items-center mb-12 mr-4 fixed bottom-0 right-0 border border-gray-400 rounded p-2 bg-gray-300 text-pink-600 text-sm">
            <svg class="h-6 w-auto inline" viewBox="0 0 80 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#paint0_linear)" fill-rule="evenodd" clip-rule="evenodd" d="M32 16C24.8 16 20.3 19.6 18.5 26.8C21.2 23.2 24.35 21.85 27.95 22.75C30.004 23.2635 31.4721 24.7536 33.0971 26.4031C35.7443 29.0901 38.8081 32.2 45.5 32.2C52.7 32.2 57.2 28.6 59 21.4C56.3 25 53.15 26.35 49.55 25.45C47.496 24.9365 46.0279 23.4464 44.4029 21.7969C41.7557 19.1099 38.6919 16 32 16ZM18.5 32.2C11.3 32.2 6.8 35.8 5 43C7.7 39.4 10.85 38.05 14.45 38.95C16.504 39.4635 17.9721 40.9536 19.5971 42.6031C22.2443 45.2901 25.3081 48.4 32 48.4C39.2 48.4 43.7 44.8 45.5 37.6C42.8 41.2 39.65 42.55 36.05 41.65C33.996 41.1365 32.5279 39.6464 30.9029 37.9969C28.2557 35.3099 25.1919 32.2 18.5 32.2Z"></path>
                <defs>
                    <linearGradient id="paint0_linear" x1="3.5" y1="16" x2="59" y2="48" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#2298BD"></stop>
                        <stop offset="1" stop-color="#0ED7B5"></stop>
                    </linearGradient>
                </defs>
            </svg>
            Current breakpoint
            <span class="ml-1 sm:hidden md:hidden lg:hidden xl:hidden">default (&lt; 640px)</span>
            <span class="ml-1 hidden sm:inline md:hidden font-extrabold">sm</span>
            <span class="ml-1 hidden md:inline lg:hidden font-extrabold">md</span>
            <span class="ml-1 hidden lg:inline xl:hidden font-extrabold">lg</span>
            <span class="ml-1 hidden xl:inline font-extrabold">xl</span>
        </div>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

