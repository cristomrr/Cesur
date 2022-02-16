<?php

class db
{

    public function __construct()
    {
    }

    public function getConexion()
    {
        try {
            require_once 'configdb.php';
            $pdo_opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $db = new PDO('mysql:host=' . HOST . PORT . ';dbname=' . DB, USER, PASSWD, $pdo_opciones);
            $db->query('SET NAMES "utf8"');
            return $db;
        } catch (PDOException $e) {
            return false;
        }
    }
}

