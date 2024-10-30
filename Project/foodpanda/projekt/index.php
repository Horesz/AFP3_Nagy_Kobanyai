<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodPanda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('header.html'); ?>
    <main>
        <div class="termekek">
            <div class="termek" id="calzone">
                <img src="img/calzone.jpg" alt="Calzone">
                <div class="termekSzoveg">
                    <p class="termekNev">Calzone</p>
                    <p class="ar">2500</p>
                    <button onclick="addToCart(document.getElementById('calzone'))">+</button>
                </div>
            </div>
            <div class="termek" id="kukoricas">
                <img src="img/kukoricas.jpg" alt="Kukoricás">
                <div class="termekSzoveg">
                    <p class="termekNev">Kukoricás</p>
                    <p class="ar">2000</p>
                    <button onclick="addToCart(document.getElementById('kukoricas'))">+</button>
                </div>
            </div>
            <div class="termek" id="mozzarella">
                <img src="img/mozzarella.jpg" alt="Mozzarella">
                <div class="termekSzoveg">
                    <p class="termekNev">Mozzarella</p>
                    <p class="ar">2800</p>
                    <button onclick="addToCart(document.getElementById('mozzarella'))">+</button>
                </div>
            </div>
            <div class="termek" id="margherita">
                <img src="img/margherita.jpg" alt="Margherita">
                <div class="termekSzoveg">
                    <p class="termekNev">Margherita</p>
                    <p class="ar">2000</p>
                    <button onclick="addToCart(document.getElementById('margherita'))">+</button>
                </div>
            </div>
            <div class="termek" id="funghi">
                <img src="img/funghi.jpg" alt="Funghi">
                <div class="termekSzoveg">
                    <p class="termekNev">Funghi</p>
                    <p class="ar">2400</p>
                    <button onclick="addToCart(document.getElementById('funghi'))">+</button>
                </div>
            </div>
        </div>
        <div class="kosar" id="kosar">
            <div class="osszesito"><p id="sumMoney">0</p>Ft</div>
        </div>
    </main>
    <?php include('footer.html'); ?>
    <script src="cart.js"></script>
</body>
</html>