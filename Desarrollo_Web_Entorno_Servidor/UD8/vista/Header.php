<?php

abstract class Header
{

    public static function home()
    {
        echo "<!DOCTYPE html>
                <html lang='es'>
                <head>
                    <meta charset='UTF-8'>
                    <link rel='stylesheet' href='./css/style.css'>
                    <title>Game of Thrones por Cristo MRR</title>
                </head>
                <body>
                    <header class='header flex-center'>
                        <img src='./images/titulo.png' alt='Serie Game of thrones'>
                    </header>";
    }
}