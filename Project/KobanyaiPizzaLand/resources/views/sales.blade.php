<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png">

    <title>Akciók - PizzaLand</title>
</head>
<body>

@include('header')

<section class="sales">
    <div id="slider-container">
        <div id="slider-scroller">
            @foreach ($randomImages as $image)
            <div class="slider-item"><img id="rotating-image" src="{{ asset($image) }}" alt="Pizza"></div>
        @endforeach</div>
    </div>
    </section>

@include('footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        function slideSlider() {
            $("#slider-scroller").css({"left": "0%", "transition": "all 0s linear"});
            $("#slider-scroller").css({"left": String(parseInt($("#slider-scroller").css("left")) - 500) + "px", "transition": "all 5s linear"});
            setTimeout(function() { moveSliderItem(); }, 5000);
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
