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

<div class="mt-5 text-center">

            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form class="form" method="POST" action="{{ route('register') }}" style="max-width: 250px; margin: auto">
                <h1 class="h3 mb=3">JOIN NOW</h1>
                @csrf

                <div class="mt-4">
                    <label for="name" value="{{ __('Name') }}"></label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name" >
                </div>

                <div class="mt-4">
                    <label for="email" class="sr-only" value="{{ __('Email') }}"></label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" :value="old('email')" required />
                </div>

                    <label for="password" value="{{ __('Password') }}"></label>
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required autocomplete="new-password" />

                    <label for="password_confirmation" value="{{ __('Password') }}"></label>
                    <input type="password" placeholder="Confirm Password" id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4" style="background-color: black; padding: 10px 95px; font-size: 20px;">
                        {{ __('Register') }}
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
