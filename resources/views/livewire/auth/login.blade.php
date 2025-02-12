{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    @livewireStyles
</head> --}}


<div>
    <div class="container mt-2" style="padding-left: 15px; padding-right: 15px;">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="card mt-3 rounded-4">
                    <div class="card-body" style="padding: 30px;">
                        <div class="container">
                            <h2 class="mt-2 mb-2 text-center"><strong>Sign in</strong></h2>
                            <form wire:submit="login">
                                <label class="form-label mt-4 required" style="font-size: 12px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><strong>Email address</strong></label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at"
                                            style="width: 20px; height: 20px;" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                                        </svg>
                                    </span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        wire:model.live.blur="email" placeholder="Email address" />
                                </div>
                                @error('email')
                                    <div class="mt-1 text-info">{{ $message }}</div>
                                @enderror
                                <label class="form-label mt-3 required" style="font-size: 12px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><strong>Password</strong></label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-lock" style="width: 20px; height: 20px;" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                            </path>
                                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                            <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                        </svg>
                                    </span>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        wire:model.live.blur="password" placeholder="Password" />
                                </div>
                                @error('password')
                                    <div class="mt-1 text-info">{{ $message }}</div>
                                @enderror
                                <div class="mt-3">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input" wire:model.live.blur="remember" />
                                        <span class="form-check-label" style="font-size: 12px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Remember me on this device</span>
                                    </label>
                                </div>
                                <div class="mt-3 mb-3 text-center">
                                    <button type="submit" class="btn btn-info w-100" style="background-color: #0695dd; border-color: rgb(247, 247, 247); border-radius: 15px; color: rgb(255, 255, 255);">
                                        <div wire:loading.remove wire:target="login">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-login" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                                </path>
                                                <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                            </svg>
                                        </div>
                                        <div wire:loading wire:target="login">
                                            <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                        </div>
                                        Sign in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3 login" style="margin-top: -20px; text-align: center;">
                    Doesn't have an account yet? <a wire:navigate href="{{ route('register') }}" wire:navigate
                        class="text-info">Sign up</a>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>



