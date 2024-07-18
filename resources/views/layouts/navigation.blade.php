<div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
    class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-3">
        <span class="text-white text-2xl mx-2 font-semibold">{{ __('Blog-Application') }}</span>
    </div>

    <nav class="mt-10" x-data="{ isMultiLevelMenuOpen: false }">

        @if (Auth::user()->is_admin)
            <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                <x-slot name="icon">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                </x-slot>
                {{ __('Users') }}
            </x-nav-link>
        @endif

        <x-nav-link href="{{ route('categories.index') }}" :active="request()->routeIs('categories.index')">
            <x-slot name="icon">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
            </x-slot>
            {{ __('Category') }}
        </x-nav-link>

        <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
            <x-slot name="icon">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M5 3v4M5 7h14M5 11h14M5 15h14M5 19h14M19 3v16a1 1 0 01-1 1H5a1 1 0 01-1-1V3"></path>
                </svg>
            </x-slot>
            {{ __('Posts') }}
        </x-nav-link>


    </nav>
</div>