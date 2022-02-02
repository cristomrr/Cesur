<?php

class ConexionActores
{
    private PDO $conexion;
    private PDOStatement|false $actores_cast;
    private PDOStatement|false $actores_season;
    private PDOStatement|false $actores_id;

    public function __construct()
    {
        try {
            require_once 'thronesDB.php';
            $pdo_opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $this->conexion = new PDO('mysql:host=' . HOST . PORT . ';dbname=' . DB, USER, PASSWD, $pdo_opciones);
            $this->conexion->query('SET NAMES "utf8"');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        //preparamos las consultas preparadas
        $this->actores_cast = $this->conexion->prepare('SELECT * FROM cast');
        $this->actores_season = $this->conexion->prepare('SELECT * FROM season_ep WHERE season = :season');
        $this->actores_episode = $this->conexion->prepare('SELECT * FROM season_ep WHERE episode = :episode');
        $this->actores_season_all = $this->conexion->prepare('SELECT * FROM season_ep');
        $this->actores_id = $this->conexion->prepare('SELECT * FROM season_ep WHERE id = :id');
    }

    public function actoresCast(): bool|array
    {
        $this->actores_cast->execute();
        return $this->actores_cast->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actoresEpisode($episodio): bool|array
    {
        $this->actores_episode->bindParam(':episode', $episodio);
        $this->actores_episode->execute();
        return $this->actores_episode->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actoresSeason($temporada): bool|array
    {
        if ($temporada === '*') {
            $this->actores_season_all->execute();
            return $this->actores_season_all->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $this->actores_season->bindParam(':season', $temporada);
            $this->actores_season->execute();
            return $this->actores_season->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function actoresSeasonId($id): bool|array
    {
        $this->actores_id->bindParam(':id', $id);
        $this->actores_id->execute();
        return $this->actores_id->fetchAll(PDO::FETCH_ASSOC);
    }
}