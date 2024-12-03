<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapcsolat - PizzaLand</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>

    @include('header')

    <section class="contact">
        <div class="container">
            <h1>Kapcsolat</h1>
            <p>Ha bármilyen kérdésed van, vedd fel velünk a kapcsolatot!</p>
            
            <div class="contact-info">
                <p><strong>Email:</strong> <a href="mailto:info@pizzaland.hu">info@pizzaland.hu</a></p>
                <p><strong>Telefon:</strong> <a href="tel:+36123456789">+36 1 234 5678</a></p>
            </div>

            <div class="social-media">
                <p><strong>Kövess minket:</strong></p>
                <a href="https://www.facebook.com/kobanyaipizzaland" target="_blank" class="social-icon">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="https://www.instagram.com/kobanyaipizzaland" target="_blank" class="social-icon">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://twitter.com/kobanyaipizzaland" target="_blank" class="social-icon">
                    <i class="fab fa-twitter"></i> X (Twitter)
                </a>
                <a href="https://www.youtube.com/channel/UCDxxxxxx" target="_blank" class="social-icon">
                    <i class="fab fa-youtube"></i> YouTube
                </a>
            </div>

            <div class="google-map">
                <h2>Helyszín</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3300.3873828525448!2d19.134944710848387!3d47.48451708640611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741c36aead9dba1%3A0x500c4290c1ed5d0!2sBudapest%2C%20X.%20ker%C3%BClet!5e0!3m2!1shu!2shu!4v1732739791449!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            
        </div>
    </section>

    @include('footer')

</body>
</html>
