<nav x-data="{ open: false }" class=" fixed inset-x-0 bg-opacity-50 bg-black z-50"
    style="background-color: #BBD12C">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        {{-- <x-jet-application-mark class="block h-9 w-auto" /> --}}
                        <img class="block h-14 w-auto" src="{{ asset('img/logo-cumanda.png') }}" alt="logo">
                    </a>
                </div>

                <!-- Navigation Links -->
            </div>
            {{-- <style>
                h4 {
                    background: none;
                    border: none;
                    padding: 22px 40px;
                    color: white;
                    position: relative;
                    display: inline-block;
                    font-size: 14px;
                    cursor: pointer;
                    text-transform: uppercase;
                    transition: all 0.2s ease-in-out;
                }

                h4:before,
                h4:after {
                    content: '';
                    position: absolute;
                    width: 40px;
                    height: 25px;
                    border-style: solid;
                    border-color: white;
                    transform: skew(-20deg);
                    transition: all 0.2s ease-in-out;
                }

                h4:before {
                    bottom: 0;
                    left: 0;
                    border-width: 0 0 3px 3px;

                }

                h4:after {
                    top: 0;
                    right: 0;
                    border-width: 3px 3px 0 0;

                }

                h4:hover {
                    color: #222;
                }

                h4:hover:before,
                h4:hover:after {
                    background: white;
                    width: 100%;
                    height: 100%;
                    z-index: -1;
                    transform: scale(1, 1) skew(-20deg);
                }

            </style> --}}
            <style>
                h4 {
                    background: none;
                    border: none;
                    padding: 22px 40px;
                    color: white;
                    position: relative;
                    display: inline-block;
                    font-size: 14px;
                    cursor: pointer;
                    text-transform: uppercase;
                    transition: all 0.5s ease-in-out;
                }

                h4:before {
                    content: '';
                    position: absolute;
                    width: none;
                    height: 98%;
                    padding-top: 10%;
                    border-width: 20px;
                    border-color: #999999;
                    transform: skew(-20deg);
                    transition: all 0.5s ease-in-out;
                    
                }

                h4:before {
                    bottom: 0;
                    left: 0;
                    border-width: 0 0 0 1.5px;

                }
                h4:hover {
                    color: white;
                }

                h4:hover:before {
                    background: #262527;
                    width: 100%;
                    height: 100%;
                    z-index: -1;
                    transform: scale(1) skew(-20deg);
                }
            </style>
            <div class="hidden sm:ml-10 sm:flex">
                {{-- <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link> --}}
                <h4 class="active">
                    <span >Menu 1</span>
                </h4>
                <h4>
                    Menu 2
                </h4>
                <h4>
                    Menu 3
                </h4>
                <h4>
                    Menu 4
                </h4>
                {{-- <x-jet-nav-link class="transform -skew-x-12 px-5 " style=" background: #262527">
                    <span class="text-white text-base font-semibold">Menu 1</span>
                </x-jet-nav-link>
                <x-jet-nav-link class="transform -skew-x-12 px-5 ">
                    <span class="text-white text-base font-semibold">Menu 2</span>
                </x-jet-nav-link> --}}
                {{-- <x-jet-nav-link class="transform -skew-x-12 px-5" style="border-left: 1px solid #808080;">
                    <span class="text-white text-base font-semibold">Menu 3</span>
                </x-jet-nav-link>
                <x-jet-nav-link class="transform -skew-x-12 px-5" style="border-left: 1px solid #808080;">
                    <span class="text-white text-base font-semibold">Menu 4</span>
                </x-jet-nav-link>
                <x-jet-nav-link class="transform -skew-x-12 px-5" style="border-left: 1px solid #808080; border-right: 1px solid #808080;">
                    <span class="text-white text-base font-semibold">Menu 5</span>
                </x-jet-nav-link> --}}
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    {{-- <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" /> --}}
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                       {{--  <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" /> --}}
                    </div>
                @endif
                <div>
                    {{-- <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div> --}}
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                    :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                        :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
