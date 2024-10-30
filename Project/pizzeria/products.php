<?php
    $json = json_decode(file_get_contents('termeklista.json'));
    $responseText="";
    foreach($json as $jsonItem)
    {
        $name=$jsonItem->name;
        $price=$jsonItem->price;
        $imagePath=$jsonItem->imagePath;
        
        $responseText = $responseText.
        "<div class=\"termek\" id=\"bbq\">
        <img src=\"img/bbq.jpg\" alt=\"BBQ\">
        <div class=\"termekSzoveg\">
            <p class=\"termekNev\">BBQ</p>
            <p class=\"ar\">2500</p>
            <button onclick=\"addToCart(document.getElementById('bbq'))\">+</button>
        </div>
    </div>";
    }
    echo $responseText;
?>