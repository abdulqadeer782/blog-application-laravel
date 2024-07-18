<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="min-height: 100vh;">
    <header class="bg-gray-800 text-white p-4 flex justify-between items-center px-5" style="height: 70px;">
        <div class="text-lg font-semibold">
            Blog Application
        </div>
        <div class=" flex items-center">
            <a href="{{route('posts.create')}}">
                <x-primary-button>Submit an article</x-primary-button>
            </a>
            @if (Auth::user())
                <x-dropdown>
                    <x-slot name="trigger">
                        <button @click="dropdownOpen = ! dropdownOpen" class="relative block overflow-hidden">
                            {{ Auth::user()->name }}
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @else
                <a href="{{route('login')}}">
                    <x-secondary-button>
                        Login
                    </x-secondary-button>
                </a>
            @endif
        </div>
    </header>

    <main class="overflow-y-auto overflow-x-hidden flex-1">
        <div class="container px-6 py-8 mx-auto">
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-gray-800 text-white p-4 flex justify-center items-center" style="height: 70px;">
        &copy; 2024.
    </footer>
</body>

</html>