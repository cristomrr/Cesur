<?php

require_once './ControladorActores.php';

ControladorActores::conexionDB();

try {
    match ($_POST["pag"]) {
        'home' => ControladorActores::vistaHome(),
        'Actores' => ControladorActores::vistaInfoActores(),
        'Temporadas' => ControladorActores::vistaTemporadas(),
        "1", "2", "3", "4", "5", "6", "7", "8" => ControladorActores::vistaInfoTemporadas($_POST["pag"]),
        "Todas" => ControladorActores::vistaInfoTemporadas("*"),
        'id' => ControladorActores::vistaInfoActorID(),
        "E1", "E2", "E3", "E4", "E5", "E6", "E7", "E8", "E9", "E10" => ControladorActores::vistaInfoEpisode(str_replace("E", "", $_POST["pag"])),
        default => ControladorActores::vistaError("Error al intentar acceder a la página.\n Llegó la opción pero ninguna era válida"),
    };
} catch (Exception $e) {
    ControladorActores::vistaError("Error al intentar acceder a la página. Info:\n" . $e->getMessage());
    die();
}
