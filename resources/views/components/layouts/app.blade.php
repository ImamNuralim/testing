<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=".">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Teras Ilmu Center' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
</head>

<body>
    <div class="page">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container">
                <h1 class="navbar-brand text-info navbar-brand-autodark d-block-navbar-horizontal pe-0 pe-md-3">
                    <a href="{{ route('home') }}">
                        Teras Ilmu Center Q&A
                    </a>
                </h1>

                <div class="navbar-nav flex-row justify-content-center flex-grow-1"
                    style="justify-content: end !important;">
                    @guest
                        <div class="nav-item d-block d-md-flex me-3">
                            <div class="btn-list">
                                <a class="navbar-signin" wire:navigate href="{{ route('login') }}" wire:navigate
                                    class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('login') ? 'active' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login"
                                        width="20" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                        </path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>
                                    Sign in
                                </a>
                                <a class="navbar-signup" href="{{ route('register') }}" wire:navigate
                                    class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('register') ? 'active' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                                        width="20" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                    </svg>
                                    Sign up
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="nav-item d-block d-md-flex me-2">
                            <div class="btn-list me-2">

                                <a href="{{ route('home') }}"
                                    class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('home') ? 'active' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home"
                                        width="20" height="24" viewBox="0 0 24 24" stroke-width="1"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                    </svg>
                                </a>
                                <a href="#" wire:navigate
                                    class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('index') ? 'active' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-book">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                        <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                        <path d="M3 6l0 13" />
                                        <path d="M12 6l0 13" />
                                        <path d="M21 6l0 13" />
                                    </svg>
                                    {{-- quran --}}
                                </a>
                                <a href="{{ route('video')}}" wire:navigate
                                    class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('video') ? 'active' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-movie">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                        <path d="M8 4l0 16" />
                                        <path d="M16 4l0 16" />
                                        <path d="M4 8l4 0" />
                                        <path d="M4 16l4 0" />
                                        <path d="M4 12l16 0" />
                                        <path d="M16 8l4 0" />
                                        <path d="M16 16l4 0" />
                                    </svg>

                                </a>
                                <a href="#"
                                    class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('appearance.index') ? 'active' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell"
                                        width="20" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                                        </path>
                                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('appearance.index') ? 'active' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-hipchat">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M17.802 17.292s.077 -.055 .2 -.149c1.843 -1.425 3 -3.49 3 -5.789c0 -4.286 -4.03 -7.764 -9 -7.764c-4.97 0 -9 3.478 -9 7.764c0 4.288 4.03 7.646 9 7.646c.424 0 1.12 -.028 2.088 -.084c1.262 .82 3.104 1.493 4.716 1.493c.499 0 .734 -.41 .414 -.828c-.486 -.596 -1.156 -1.551 -1.416 -2.29z" />
                                        <path d="M7.5 13.5c2.5 2.5 6.5 2.5 9 0" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a id="dropdown" href="#" class="nav-link d-flex lh-1 text-reset p-0"
                                data-bs-toggle="dropdown">
                                <span class="avatar avatar-sm rounded-circle"
                                    style="background-image: url(@if (auth()->user()->image == null) 'https://ui-avatars.com/api/?name={{ auth()->user()->username }}&background=DE6060&color=fff&rounded=true&size=112' @else {{ asset('storage/' . auth()->user()->image) }} @endif)"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <a target="_blank" class="dropdown-item text-dark"
                                    href="{{ route('profile.index', auth()->user()->username_slug) }}">
                                    {{ auth()->user()->username }}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('stats.index') }}">
                                    Your content & stats
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    Settings
                                </a>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('signout-form').submit();"
                                    class="dropdown-item">
                                    Sign out
                                </a>
                                <form id="signout-form" action="{{ route('logout') }}" method="POST" class="d-block">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>

            </div>
        </header>

        <div class="">
            <div class="container">
                {{ $slot ?? null }}
                @yield('main')
                @yield('video')
                @yield('kitab')

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script type="text/javascript">
        window.addEventListener('toastify', function(e) {
            Toastify({
                text: e.detail.text,
                duration: 5000,
                close: true,
                gravity: "top",
                position: "center",
                style: {
                    background: e.detail.background
                }
            }).showToast();
        });

        window.onscroll = function(ev) {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                Livewire.dispatch('increase-limit');
            }
        }
    </script>
</body>

</html>
