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

    <div class="video-container">
        <video id="background-video" autoplay loop muted>
            <source src="{{ asset('video/pizza.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
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

    <section class="opening-hours">
        <div class="container">
            <h2>Nyitvatartás</h2>
            <ul>
                <li>Hétfő: 10:00 - 22:00</li>
                <li>Kedd: 10:00 - 22:00</li>
                <li>Szerda: 10:00 - 22:00</li>
                <li>Csütörtök: 10:00 - 22:00</li>
                <li>Péntek: 10:00 - 23:00</li>
                <li>Szombat: 11:00 - 23:00</li>
                <li>Vasárnap: 11:00 - 21:00</li>
            </ul>
        </div>
    </section>


<div class="all-the-foods">
    <div>
        <h2 style="color: black;">Kedvelt pizzáink</h2>
    </div>
  <div class="clip-path-container">
    <div class="description-holder">
      <h4>Cheese</h4>
      <p>A klasszikus ízek kedvelőinek, tele olvadt sajt csábító harmóniájával.</p>
    </div>
    <div class="food bibimbap"></div>
  </div>

  <div class="clip-path-container">
    <div class="description-holder">
      <h4>Diavola</h4>
      <p>Fűszeres, tüzes és izgalmas, tökéletes választás a pikáns ízek szerelmeseinek.</p>
    </div>
    <div class="food pizza"></div>
  </div>

  <div class="clip-path-container">
    <div class="description-holder guac-holder">
      <h4>Húsimádó </h4>
      <p>Egy valódi ízorgia, tele zamatos húsokkal a kiadós étkezések rajongóinak.</p>
    </div>
    <div class="food guacamole"></div>
  </div>

  <div class="clip-path-container">
    <div class="description-holder">
      <h4>Greek </h4>
      <p>Mediterrán ízek kavalkádja, amely a frissesség és a könnyedség jegyében készült.</p>
    </div>
    <div class="food cookie"></div>
  </div>

  <div class="clip-path-container">
    <div class="description-holder">
      <h4>Funghi</h4>
      <p>A gombák szerelmeseinek, ahol az erdei aromák találkoznak a pizza puha alapjával.</p>
    </div>
    <div class="food donut"></div>
  </div>

  <div class="clip-path-container">
    <div class="description-holder">
      <h4>Capricciosa</h4>
      <p>Egy változatos klasszikus, amely minden falatban új ízélményt nyújt.</p>
    </div>
    <div class="food pancake"></div>
  </div>

</div>



    <section class="reviews">
        <div class="container">
        <div class="slider-heading-content">
            <h2>Vélemények</h2>
        </div>

        <div class="slider_container">
            <div class="slides fade">
            <div class="review-item">
                <span class="star-rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <br><span class="reviewer-info">Nagyon király!</span>
            </div>
            <div class="review-item">
                <span class="star-rating">&#9733;&#9733;&#9733;&#9733;</span>
                <br><span class="reviewer-info">Fincsi!</span>
            </div>
            <div class="review-item">
                <span class="star-rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <br><span class="reviewer-info">Nagyon szeretek innen rendelni!</span>
            </div>
            </div>

            <div class="slides fade">
            <div class="review-item">
                <span class="star-rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <br><span class="reviewer-info">Legjobb pizzák!</span>
            </div>
            <div class="review-item">
                <span class="star-rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <br><span class="reviewer-info">Kedvencünk a Húsimádó!</span>
            </div>
            <div class="review-item">
                <span class="star-rating">&#9733;&#9733;&#9733;&#9733;</span>
                <br><span class="reviewer-info">Legjobb ajánlatok!</span>
            </div>
            </div>
        </div>

        <div class="slider_dots">
            <span class="slider_dots--dot" id="1" onclick="dotPageChange(1)"></span>
            <span class="slider_dots--dot" id="2" onclick="dotPageChange(2)"></span>
        </div>
        </div>

    </section>


        <!-- Hírlevél feliratkozás -->
        <div class="newsletter-signup">
        <h2>Iratkozz fel hírlevelünkre!</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('newsletter.subscribe') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email címed" required>
            <button type="submit">Feliratkozás</button>
        </form>
    </div>

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



        (function(){

    })()

    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
    let i;
      let slides = document.getElementsByClassName("slides");
      let dots = document.getElementsByClassName("slider_dots--dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }


    // Allows you to use the dots to navigate to the corresponding slide
    function dotPageChange(n){
      let dots = document.getElementsByClassName("slider_dots--dot");
      let i;
      for (i = 0; i < dots.length; i++){
        if (dots[i].id == n){
          dots[i].className += " active";
          currentSlide(n);
        }
      }
    }

    //Change the input to anything but true in order to stop the animation on the slides
    let toggleSlide = true;

    // Change the variable below to speed up/slow down the time between slides, 1 second = 1000
    let timeBetweenSlideChange = 10000;

    slideAnimation(toggleSlide);

    function slideAnimation(boolean){
      if (boolean === true){

    let interval = window.setInterval(function(){plusSlides(1)}, timeBetweenSlideChange);

    // Adding stop/start on hover to container
    let container = document.querySelector(".container");
    container.onmouseover = pauseSlides;
    container.onmouseleave = resumeSlides;

    // Adding stop/start on hover to the dots below slides
    let dots = document.getElementsByClassName("slider_dots--dot");
    for (i = 0; i < dots.length; i++) {
      dots[i].onmouseenter = pauseSlides;
      dots[i].onmouseleave = resumeSlides;
    }

    function pauseSlides()
    {
        clearInterval(interval); // Clear the interval we set earlier
    }

    function resumeSlides()
    {
        interval = window.setInterval(function(){plusSlides(1)}, timeBetweenSlideChange); // Restart the slides animation
    }
      }
      else {}
    };

    });
    </script>
</body>
</html>
