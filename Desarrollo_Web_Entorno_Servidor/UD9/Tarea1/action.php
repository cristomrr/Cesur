<?php
session_start();
if (isset($_POST["accion"])) {
    switch ($_POST["accion"]) {
        case "Iniciar":
            $_SESSION["user"] = htmlentities(addslashes($_POST["usuario"]));
            break;
        case "Salir":
            unset($_SESSION["user"]);
        default:
            session_destroy();
    }
}
header("Location: ./main.php");
