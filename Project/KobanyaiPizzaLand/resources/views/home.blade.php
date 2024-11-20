<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PizzaLand</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    </head>
<body>

    @include('header')

    <section class="welcome">
        <div class="container">
            <h1>Üdvözlünk a Kőbányai Pizzéria oldalán!</h1>
            <p>Fedezd fel a legfinomabb pizzákat és rendelj online!</p>
            <div class="image-container">
                <img id="rotating-image" src="{{ asset($randomImages[0]) }}" alt="Pizza">
            </div>
            <a href="{{ route('pizzas.view') }}" class="btn explore-button">Fedezd fel a pizzákat!</a>
            <div class="video-container">
                <video id="background-video" autoplay loop>
                    <source src="{{ asset('video/pizza.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>


    <section class="reviews">
        <div class="container">
            <h2>Vásárlói Vélemények</h2>
        </div>
    </section>

    @include('footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var images = @json($randomImages);
            var currentIndex = 0;
            var imageElement = document.getElementById('rotating-image');

            
            setInterval(function() {
                imageElement.classList.add('fade-out');
                setTimeout(function() {
                    currentIndex = (currentIndex + 1) % images.length;
                    imageElement.src = images[currentIndex];
                    imageElement.classList.remove('fade-out');
                }, 800);
            }, 10000);
        });

    </script>
</body>
</html>
