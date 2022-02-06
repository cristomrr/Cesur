<?php

require_once "./controller/ControllerView.php";
require_once "./model/ConeccionDB.php";
const COKKIE = "articulosCarrito";

if (isset($_POST["seccion"])) {
    match ($_POST["seccion"]) {
        "home" => ControllerView::vistaHome(),
        "pc" => ControllerView::vistaArticulos(ConeccionDB::articulos()),
        "infoarticulo" => ControllerView::vistaInfoArticulo(ConeccionDB::articuloId($_POST['id'])),
        "Añadir al carrito" => agregarCarrito($_POST["id"], $_POST["cantidad"]),
        "carrito" => carrito(),
        "Hacer compra" => carrito(),
        "Vaciar carrito" => vaciarCarrito(),
        default => ControllerView::vistaError("Esa página no existe"),
    };

} else {

    ControllerView::vistaError("No se recibió que página a ver");
}

function carrito()
{
    $carrito = leerCookie(COKKIE);
    $articulos = [];
    foreach (array_keys($carrito) as $key) {
        $articulos[] = ConeccionDB::articuloId($key);
    }
    ControllerView::vistaCarrito($articulos, $carrito);
}

function agregarCarrito($id = false, $cantidad = false)
{
    $carrito = leerCookie(COKKIE);
    if ($id && $cantidad) {
        $carrito[$id] = $cantidad;
        setcookie(COKKIE, json_encode($carrito), time() + 86400);
    }
    ControllerView::vistaArticulos(ConeccionDB::articulos());
}

function vaciarCarrito()
{
    setcookie(COKKIE, "", time() - 31536000);
    ControllerView::vistaArticulos(ConeccionDB::articulos());
}

function leerCookie($nombre)
{
    return (isset($_COOKIE[$nombre]))
        ? json_decode($_COOKIE[$nombre], true)
        : [];
}
