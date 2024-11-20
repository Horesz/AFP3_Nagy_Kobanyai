<style>
    
    body, html {
        height: 100%;
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #fff9e6; 
        display: flex;
        align-items: center;
        justify-content: center;
    }

    
    .register-container {
        width: 100%;
        max-width: 400px; 
        padding: 20px;
        background-color: #fffdf5;
        border-radius: 8px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center; 
    }

   
    .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px; 
    }

    
    .logo-container img {
        width: 300px; 
        height: auto;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    label {
        font-weight: bold;
        color: #333;
        display: block;
        margin-top: 12px;
        text-align: left;
    }

    
    .register-button {
        background-color: #ff4b4b; 
        color: white;
        border: none;
        padding: 10px 20px;
        margin-top: 15px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%; 
    }

    
    .login-link {
        display: block;
        margin-top: 12px;
        color: #ff4b4b; 
        text-decoration: underline;
        text-align: center; 
    }

    .login-link:hover {
        color: #ff6b6b;
    }
</style>

<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<x-guest-layout>
    
    <div class="logo-container">
        <a href="/" class="img">
            <img src="{{ asset('images/logo/logo.png') }}" alt="PizzaLand" id="logo">
        </a>
    </div>

   
    <div class="register-container">
        <form method="POST" action="{{ route('register') }}">
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

            
            <button type="submit" class="register-button ms-4">
                    {{ __('Regisztráció') }}
                </button>

            <div class="justify-end mt-4" >
            
                <a class="login-link underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Már regisztráltál?') }}
                </a>

                
            </div>
        </form>
    </div>

 @include('footer')

</x-guest-layout>