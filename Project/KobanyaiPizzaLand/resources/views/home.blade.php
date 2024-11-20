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

    <div class="video-container">
                <video id="background-video" autoplay loop muted >
                    <source src="{{ asset('video/pizza.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
    </div>

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
        <div class="slider-heading-content">
            <h2>Vélemények</h2>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

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
                <span class="star-rating">&#9733;&#9733;&#9733;&#9733;</span>
                <br><span class="reviewer-info">By Second Page Reviewer, NC</span>
            </div>
            <div class="review-item">
                <span class="star-rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <br><span class="reviewer-info">By Second Page Reviewer, NC</span>
            </div>
            </div>
        </div>

        <div class="slider_dots">
            <span class="slider_dots--dot" id="1" onclick="dotPageChange(1)"></span>
            <span class="slider_dots--dot" id="2" onclick="dotPageChange(2)"></span>
        </div>
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
let timeBetweenSlideChange = 4000;

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
