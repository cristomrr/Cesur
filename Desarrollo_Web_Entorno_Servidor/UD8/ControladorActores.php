<?php

use JetBrains\PhpStorm\NoReturn;

require_once './vista/Header.php';
require_once './vista/Footer.php';
require_once './vista/Main.php';


abstract class ControladorActores
{

    private static ConexionActores $db;

    public static function conexionDB()
    {
        try {
            require_once './modelo/ConexionActores.php';
            self::$db = new ConexionActores();
        } catch (PDOException $e) {
            self::vistaError('Ha habido un error:\n' . $e->getMessage());
        }
    }

    public static function vistaHome()
    {
        Header::home();
        Main::home();
        Footer::home();
    }

    public static function vistaInfoActores()
    {
        Header::home();
        Main::infoActor(self::$db->actoresCast());
        Footer::home();
    }

    public static function vistaTemporadas()
    {
        Header::home();
        Main::temporadas();
        Footer::home();
    }

    public static function vistaInfoTemporadas($sesion)
    {
        Header::home();
        Main::infoTemporadas(self::$db->actoresSeason($sesion));
        Footer::home();
    }

    public static function vistaInfoEpisode($episodio)
    {
        Header::home();
        Main::infoTemporadas(self::$db->actoresEpisode($episodio), $episodio);
        Footer::home();
    }

    public static function vistaInfoActorID($id)
    {
        $_POST['actores'] = self::$db->actoresSeasonId($id);
        require_once './vista/info_actor.php';
    }

    public static function vistaError($mensaje)
    {
        Header::home();
        Main::error($mensaje);
        Footer::home();
        die();
    }
}


