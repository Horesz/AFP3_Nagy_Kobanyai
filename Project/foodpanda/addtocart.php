<?php
    session_start();
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        if(!isset($_SESSION["cart"]))
        {
            $_SESSION["card"]=array();
        }
        var_dump($_SESSION["cart"]);
    }

    
?>