<?php

abstract class ConeccionDB
{
    private static PDO $db;

    public static function getConexion(): void
    {
        require_once 'configDB.php';
        $pdo_opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$db = new PDO('mysql:host=' . HOST . PORT . ';dbname=' . DB, USER, PASSWD, $pdo_opciones);
        self::$db->query('SET NAMES "utf8"');
    }

    public static function articulos(): bool|array
    {
        self::getConexion();
        $stm = self::$db->prepare('SELECT * FROM ud9caso1servidores.articulo');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function articuloId($id): bool|array
    {
        self::getConexion();
        $stm = self::$db->prepare('SELECT * FROM ud9caso1servidores.articulo WHERE id = :id');
        $stm->bindParam('id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}
