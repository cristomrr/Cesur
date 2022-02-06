<?php

require_once './view/HeaderView.php';
require_once './view/FooterView.php';
require_once './view/MainView.php';


abstract class ControllerView
{

    public static function vistaHome()
    {
        header('Location: ./index.php');
    }

    public static function vistaArticulos($articulos)
    {
        HeaderView::home();
        MainView::articulos($articulos, 'Ofertas ardientes:');
        FooterView::home();
    }

    public static function vistaInfoArticulo($articulo)
    {
        HeaderView::home();
        MainView::infoArticulo($articulo);
        FooterView::home();
    }

    public static function vistaCarrito($articulos, $cantidad)
    {
        HeaderView::home();
        MainView::carrito($articulos, "Artículos actualmente en tu carrito:", $cantidad);
        FooterView::home();
    }

    public static function vistaError($mensaje = 'No se recibió el mensaje de error')
    {
        HeaderView::home();
        MainView::error($mensaje);
        FooterView::home();
    }
}
