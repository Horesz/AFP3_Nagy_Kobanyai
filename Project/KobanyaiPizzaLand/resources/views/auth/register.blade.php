<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<title>Regisztráció</title>

<div class="register-container">
    <div class="logo-container">
        <a href="/" class="img">
            <img src="{{ asset('images/logo/logo.png') }}" alt="PizzaLand" id="logo">
        </a>
    </div>

<x-guest-layout>

@csrf   
            <div>
                <label for="name">Név</label>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            
          
            <div class="mt-4">
                <label for="email">Email cím</label>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            
            <div class="mt-4">
                <label for="password">Jelszó</label>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

           
            <div class="mt-4">
                <label for="password_confirmation">Jelszó megerősítése</label>
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <x-primary-button class="x-primary-button ms-3">
                     {{ __('Regisztráció') }}
            </x-primary-button>

            <div class="justify-end mt-4" >
            
                <a class="login-link underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Már regisztráltál?') }}
                </a>

                
            </div>
        </form>
    </div>
    
    <div class = "watermark">   
    <p>&copy; 2024 Kőbányai Pizzéria. Minden jog fenntartva.</p>
    </div>
</x-guest-layout>