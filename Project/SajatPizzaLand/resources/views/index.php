<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaland</title>
</head>
<body>
<?php include('header.html'); ?>
    <main>
        <div class="termekek">
            <div class="termek" id="bbq">
                <img src="img/bbq.jpg" alt="BBQ">
                <div class="termekSzoveg">
                    <p class="termekNev">BBQ</p>
                    <p class="ar">2900 Ft</p>
                    <br>
                    <button onclick="addToCart(document.getElementById('bbq'))">+</button>
                </div>
            </div>
            <div class="termek" id="bismark">
                <img src="img/bismark.jpg" alt="Bismark">
                <div class="termekSzoveg">
                    <p class="termekNev">Bismark</p>
                    <p class="ar">2500 Ft</p>
                    <button onclick="addToCart(document.getElementById('bismark'))">+</button>
                </div>
            </div>
            <div class="termek" id="bolognese">
                <img src="img/bolognese.jpg" alt="Bolognese">
                <div class="termekSzoveg">
                    <p class="termekNev">Bolognese</p>
                    <p class="ar">2700 Ft</p>
                    <button onclick="addToCart(document.getElementById('bolognese'))">+</button>
                </div>
            </div>
            <div class="termek" id="capricciosa">
                <img src="img/capricciosa.jpg" alt="Capricciosa">
                <div class="termekSzoveg">
                    <p class="termekNev">Capricciosa</p>
                    <p class="ar">2600 Ft</p>
                    <button onclick="addToCart(document.getElementById('capricciosa'))">+</button>
                </div>
            </div>
            <div class="termek" id="cardinale">
                <img src="img/cardinale.jpg" alt="Cardinale">
                <div class="termekSzoveg">
                    <p class="termekNev">Cardinale</p>
                    <p class="ar">2400 Ft</p>
                    <button onclick="addToCart(document.getElementById('cardinale'))">+</button>
                </div>
            </div>
            <div class="termek" id="cheese">
                <img src="img/cheese.jpg" alt="Cheese">
                <div class="termekSzoveg">
                    <p class="termekNev">Cheese</p>
                    <p class="ar">2700 Ft</p>
                    <button onclick="addToCart(document.getElementById('cheese'))">+</button>
                </div>
            </div>
            <div class="termek" id="diavola">
                <img src="img/diavola.jpg" alt="Diavola">
                <div class="termekSzoveg">
                    <p class="termekNev">Diavola</p>
                    <p class="ar">2500 Ft</p>
                    <button onclick="addToCart(document.getElementById('diavola'))">+</button>
                </div>
            </div>
            <div class="termek" id="funghi">
                <img src="img/funghi.jpg" alt="Funghi">
                <div class="termekSzoveg">
                    <p class="termekNev">Funghi</p>
                    <p class="ar">2200 Ft</p>
                    <button onclick="addToCart(document.getElementById('funghi'))">+</button>
                </div>
            </div>
            <div class="termek" id="greek">
                <img src="img/greek.jpg" alt="Greek">
                <div class="termekSzoveg">
                    <p class="termekNev">Greek</p>
                    <p class="ar">2800 Ft</p>
                    <button onclick="addToCart(document.getElementById('greek'))">+</button>
                </div>
            </div>
            <div class="termek" id="hawaii">
                <img src="img/hawaii.jpg" alt="Hawaii">
                <div class="termekSzoveg">
                    <p class="termekNev">Hawaii</p>
                    <p class="ar">2300 Ft</p>
                    <button onclick="addToCart(document.getElementById('hawaii'))">+</button>
                </div>
            </div>
            <div class="termek" id="hot">
                <img src="img/hot.jpg" alt="Hot">
                <div class="termekSzoveg">
                    <p class="termekNev">Hot</p>
                    <p class="ar">2900 Ft</p>
                    <button onclick="addToCart(document.getElementById('hot'))">+</button>
                </div>
            </div>
            <div class="termek" id="husimado">
                <img src="img/husimado.jpg" alt="Húsimádó">
                <div class="termekSzoveg">
                    <p class="termekNev">Húsimádó</p>
                    <p class="ar">3000 Ft</p>
                    <button onclick="addToCart(document.getElementById('husimado'))">+</button>
                </div>
            </div>
            <div class="termek" id="kalifornian">
                <img src="img/kalifornian.jpg" alt="Californian">
                <div class="termekSzoveg">
                    <p class="termekNev">Californian</p>
                    <p class="ar">2500 Ft</p>
                    <button onclick="addToCart(document.getElementById('kalifornian'))">+</button>
                </div>
            </div>
            <div class="termek" id="margherita">
                <img src="img/margherita.jpg" alt="Margherita">
                <div class="termekSzoveg">
                    <p class="termekNev">Margherita</p>
                    <p class="ar">2000 Ft</p>
                    <button onclick="addToCart(document.getElementById('margherita'))">+</button>
                </div>
            </div>
            <div class="termek" id="mexicana">
                <img src="img/mexicana.jpg" alt="Mexicana">
                <div class="termekSzoveg">
                    <p class="termekNev">Mexicana</p>
                    <p class="ar">2600 Ft</p>
                    <button onclick="addToCart(document.getElementById('mexicana'))">+</button>
                </div>
            </div>
            <div class="termek" id="pepperoni">
                <img src="img/pepperoni.jpg" alt="Pepperoni">
                <div class="termekSzoveg">
                    <p class="termekNev">Pepperoni</p>
                    <p class="ar">2200 Ft</p>
                    <button onclick="addToCart(document.getElementById('pepperoni'))">+</button>
                </div>
            </div>
            <div class="termek" id="prosciutto">
                <img src="img/prosciutto.jpg" alt="Prosciutto">
                <div class="termekSzoveg">
                    <p class="termekNev">Prosciutto</p>
                    <p class="ar">2200 Ft</p>
                    <button onclick="addToCart(document.getElementById('prosciutto'))">+</button>
                </div>
            </div>
            <div class="termek" id="siciliana">
                <img src="img/siciliana.jpg" alt="Siciliana">
                <div class="termekSzoveg">
                    <p class="termekNev">Siciliana</p>
                    <p class="ar">2800 Ft</p>
                    <button onclick="addToCart(document.getElementById('siciliana'))">+</button>
                </div>
            </div>
            <div class="termek" id="tengergyumolcse">
                <img src="img/tengergyumolcse.jpg" alt="Tenger gyümölcse">
                <div class="termekSzoveg">
                    <p class="termekNev">Tenger gyümölcse</p>
                    <p class="ar">3100 Ft</p>
                    <button onclick="addToCart(document.getElementById('tengergyumolcse'))">+</button>
                </div>
            </div>
            <div class="termek" id="vegetarian">
                <img src="img/vegetarian.jpg" alt="Vegetarian">
                <div class="termekSzoveg">
                    <p class="termekNev">Vegetarian</p>
                    <p class="ar">2200 Ft</p>
                    <button onclick="addToCart(document.getElementById('vegetarian'))">+</button>
                </div>
            </div>
        </div>
        <div class="kosar" id="kosar">
            <div class="osszesito"><p id="sumMoney">0</p>Ft</div>
        </div>
    </main>
</body>
</html>
