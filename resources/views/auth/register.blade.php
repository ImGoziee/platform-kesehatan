<x-guest-layout>
    <img class="mb-5" width="50" src="{{ asset('assets/svg/logos.svg') }}" alt="">
    <div class="font-semibold text-center">
        <h1 class="text-[2.5rem] leading-tight">Create new account</h1>
        <div class="flex items-center gap-1 text-lg">
            <p>Already a Account?</p>
            <a class="text-[#E00852]" href="{{ route('login') }}">
                {{ __('Log In') }}
            </a>
        </div>
    </div>
    <form method="POST" action="{{ route('register') }}" class="w-full max-w-[520px] mt-[15px]">
        @csrf

        <!-- Name -->
        <div class="flex gap-2.5">
            {{-- <x-input-label for="username" :value="__('Username')" /> --}}
            <x-text-input id="username" class="w-full !rounded-[35px] py-4 px-10" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="w-full !rounded-[35px] py-4 px-10" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" class="w-full !rounded-[35px] py-4 px-10"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

            <x-text-input id="password_confirmation" class="w-full !rounded-[35px] py-4 px-10"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}
            <x-primary-button class="w-full inline-flex justify-center !capitalize !text-black !text-xl !bg-[#E00852] border border-black !rounded-[35px] py-3 px-6">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        <div class="flex items-center my-10 justify-center">
            <img class="" width="200" src="{{ asset('assets/img/other-auth.png') }}" alt="">
        </div>
    </form>
</x-guest-layout>
