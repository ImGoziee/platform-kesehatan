<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <img class="mb-10" width="50" src="{{ asset('assets/svg/logos.svg') }}" alt="">
    <div class="font-semibold text-center">
        <h1 class="text-5xl">Sign In</h1>
        <div class="flex items-center gap-1 text-lg">
            <p>Not Have a Account?</p>
            <a class="text-[#E00852]" href="{{ route('register') }}">
                {{ __('Sign Up') }}
            </a>
        </div>
    </div>
    <form method="POST" action="{{ route('login') }}" class="w-full max-w-[520px] mt-[35px]">
        @csrf
        <!-- Email Address -->
        <div class="w-full">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="w-full !rounded-[35px] py-4 px-10" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" class="w-full !rounded-[35px] py-4 px-10"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}
        {{-- <div>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </div> --}}
        <div class="mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('cek bio chef arnold') }}
                </a>
            @endif --}}

            <x-primary-button class="w-full inline-flex justify-center !capitalize !text-black !text-xl !bg-[#E00852] border border-black !rounded-[35px] py-3 px-6">
                {{ __('Sign in') }}
            </x-primary-button>
        </div>
        <p class="font-semibold text-lg text-center mt-4">Or sign in with</p>
        <div class="flex items-center mt-32 justify-center">
            <img class="" width="200" src="{{ asset('assets/img/other-auth.png') }}" alt="">
        </div>
    </form>
</x-guest-layout>
