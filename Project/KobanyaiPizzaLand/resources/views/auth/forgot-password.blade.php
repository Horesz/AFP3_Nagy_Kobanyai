@include('header')
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Elfelejtette a jelszavát? Semmi gond. Csak adja meg az email-címét, és elküldünk Önnek egy jelszó-visszaállítási linket, amely lehetővé teszi egy új jelszó beállítását.') }}
    </div>

    <!-- Munkamenet állapota -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email cím -->
        <div>
            <x-input-label for="email" :value="__('Email cím')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Jelszó-visszaállítási link küldése') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@include('footer')
