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
