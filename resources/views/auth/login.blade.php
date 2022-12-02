
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!-- From here the code for the login form starts -->
<div class="mt-5 text-center">
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form" method="POST" action="{{ route('login') }}" style="max-width: 250px; margin: auto">
                @csrf
                <h1 class="h3 mb=3">LOGIN</h1>

                <label for="email" class="sr-only pb-3 pt-3" value="{{ __('Email') }}"></label>
                <input type="email" name="email" :value="old('email')" required autofocus class="form-control" id="email" placeholder="Email" required autofocus />
                
                
                <label for="password" class="pb-3 pt-3" value="{{ __('Password') }}"></label>
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required autocomplete="current-password" />

                <!-- remember me checkbox -->
                <div class="checkbox pb-3 pt-3">
                    <label>
                        <input type="checkbox" id="remember_me" name="remember"/>{{ __('Remember me') }}
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4" style="background-color: black; padding: 10px 95px; font-size: 20px;">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
