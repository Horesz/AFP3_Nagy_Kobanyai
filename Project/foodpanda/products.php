<?php
    $json = json_decode(file_get_contents('termeklista.json'));
    $responseText="";
    foreach($json as $jsonItem)
    {
        $name=$jsonItem->name;
        $price=$jsonItem->price;
        $imagePath=$jsonItem->imagePath;
        
        $responseText = $responseText.
        "<div class=\"termek\" id=\"calzone\">
        <img src=\"img/calzone.jpg\" alt=\"Calzone\">
        <div class=\"termekSzoveg\">
            <p class=\"termekNev\">Calzone</p>
            <p class=\"ar\">2500</p>
            <button onclick=\"addToCart(document.getElementById('calzone'))\">+</button>
        </div>
    </div>";
    }
    echo $responseText;
?>