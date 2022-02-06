<?php

abstract class HeaderView
{

    public static function home()
    {
        echo "<!DOCTYPE html>
        <html lang='es'>
        
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Amatic+SC&family=Lobster&family=Moon+Dance&family=Neonderthaw&family=Supermercado+One&display=swap' rel='stylesheet'>
            <link rel='stylesheet' href='./css/style.css'>
            <title>UD9 Servidores - Carrito de compra</title>
        </head>
        
        <body class='flex-between'>
            <header class='hdr flex-between'>
                <h1 class='title'>CMRR Soluciones informáticas</h1>
                <form class='flex-center' action='./accion.php' method='post'>
                    <button type='submit' name='seccion' value='home'>Home</button>
                    <button type='submit' name='seccion' value='pc'>Ordenadores</button>
                    <button type='submit' class='btn-carrito' name='seccion' value='carrito'>
                        <img src='./images/carrito.png' alt='Carrito de compra' class='carrito'>
                    </button>
                </form>
            </header>
            <main class='main flex-center'>";
    }
}
