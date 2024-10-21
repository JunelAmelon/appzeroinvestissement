<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Avez-vous oublié votre mot de passe ? Pas de soucis, Nous vous enverrons à votre adresse mail un lien qui vous permettra de le reinitialiser') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button style="background-color: #6A00B8; color:white;">
                {{ __('Cliquez ici pour modifier !') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
