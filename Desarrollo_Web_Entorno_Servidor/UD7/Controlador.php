<?php

require_once './Modelo.php';
require_once './Vista.php';

/**
 * Clase encargada de la comunicación del usuario con la base de datos y de las vistas
 */
class Controlador
{
    private Modelo $mdb;
    private Vista $vista;

    public function __construct()
    {
        $this->mdb = new Modelo();
        $this->vista = new Vista();
        $this->mdb->setConexionMariaDB();
    }

    public function vistaDatosPaises()
    {
        $datos = $this->mdb->getPaises();
        $this->vista->header();
        $this->vista->mainDatosPaises($datos);
        $this->vista->footer();
    }
}