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
        </div>
    </section>

    <div id="slider-container">
        <div id="slider-scroller">
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[0]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[1]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[2]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[3]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[4]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[5]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[6]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[7]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[8]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[9]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[10]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[11]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[12]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[13]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[14]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[15]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[16]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[17]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[18]) }}" alt="Pizza"></div>
          <div class="slider-item"><img id="rotating-image" src="{{ asset($randomImages[19]) }}" alt="Pizza"></div>
    </div>
    </div>
    <section class="reviews">
        <div class="container">
            <h2>Vásárlói Vélemények</h2>
        </div>
    </section>

    @include('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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


        //cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js
        $(document).ready(function() {
        function slideSlider() {
            $("#slider-scroller").css({"left": "0%", "transition": "all 0s linear"});
            $("#slider-scroller").css({"left": String(parseInt($("#slider-scroller").css("left")) - 500) + "px", "transition": "all 5s linear"});
            setTimeout(function() { moveSliderItem(); }, 5000); // Adjust the timeout as needed
        }

        function moveSliderItem() {
            $("#slider-scroller div").first().detach().appendTo($("#slider-scroller"));
            slideSlider();
        }

        slideSlider();
    });
    </script>
</body>
</html>
