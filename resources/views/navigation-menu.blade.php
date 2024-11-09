<nav x-data="{ open: false }" class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="hidden sm:block sm:w-60 bg-white border-r border-gray-200"> <!-- Cambia el ancho aquí -->
        <div class="h-16 flex items-center justify-center">
            <a href="{{ route('dashboard') }}">
                <x-application-mark class="block h-9 w-auto" />
            </a>
        </div>

        <nav class="mt-4">
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('inicio') }}
            </x-nav-link>
        </nav>

        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
            <div class="mt-4">
                <x-dropdown align="right" width="60">
                    <x-slot name="trigger">
                        <button type="button"
                            class="flex items-center justify-between w-full px-4 py-2 text-left text-gray-700 hover:bg-gray-100">
                            {{ Auth::user()->currentTeam->name }}
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="w-60">
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>
                            <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-dropdown-link>
                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-dropdown-link>
                            @endcan
                            @if (Auth::user()->allTeams()->count() > 1)
                                <div class="border-t border-gray-200"></div>
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>
                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-switchable-team :team="$team" />
                                @endforeach
                            @endif
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>
        @endif

        <div class="mt-4">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="flex items-center justify-between w-full px-4 py-2 text-left text-gray-700 hover:bg-gray-100">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        @else
                            {{ Auth::user()->name }}
                        @endif
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>
                    <x-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-dropdown-link>
                    @endif
                    <div class="border-t border-gray-200"></div>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</nav>
