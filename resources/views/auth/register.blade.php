<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>
            <!-- National Id -->
            <div class="mt-4">
                <x-label for="national_id" :value="__('National ID')" />

                <x-input id="national_id" class="block mt-1 w-full" type="text" name="national_id" :value="old('national_id')" required pattern="[0-9]{10}" minlength="10" maxlength="10" title="Please enter a 10-digit National ID number." />
            </div>
            <!-- Date Of birth -->
            <div class="mt-4">
                <x-label for="date_of_birth" :value="__('Date Of Birth')" />

                <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required max="{{ \Carbon\Carbon::now()->subYears(18)->format('Y-m-d') }}" />
                </div>
            <!-- Phone Number -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone Number')" />

                <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')"
                    required pattern="^(077|078|079)\d{7}$" minlength="10" maxlength="10"
                    title="Please enter a valid 10 digits phone number starting with 077, 078, or 079." />
                @error('phone')
                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
