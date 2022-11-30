<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

 <!-- From here the code for the login form starts -->
 <div class="mt-5 text-center">
            <form class="form" style="max-width: 250px; margin: auto">
                <h1 class="h3 mb=3">LOGIN</h1>
                <label for="email" class="sr-only pb-3 pt-3"></label>
                <input type="email" class="form-control" id="email" placeholder="Email" required autofocus />
                <label for="password" class="pb-3 pt-3"></label>
                <input type="password" placeholder="Password" id="password" class="form-control" />

                <!-- remember me checkbox -->
                <div class="checkbox pb-3 pt-3">
                    <label>
                        <input type="checkbox" value="remember-me" /> Remember me
                    </label>
                </div>

                <!-- Login button -->
                <div class="mt-3">
                    <button class="loginBtn">
                        Login
                    </button>
                    <p class="pt-3 me-2">Don't have an account?</p>
                    <a href="signup.php">Create one!</a>
                </div>
                <input type="hidden" name="submitted" value="TRUE" />
            </form>
</div>