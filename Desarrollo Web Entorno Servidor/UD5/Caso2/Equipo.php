<?php

require 'Jugador.php';

class Equipo
{
private array $jugadores;

    public function __construct(){}

    /**
     * @param int $numJugador
     * @return Jugador
     */
    public function getJug(int $numJugador): Jugador
    {
        return $this->jugadores[$numJugador];
    }

    /**
     * @param Jugador $jugador
     */
    public function addJug(Jugador $jugador): void
    {
        $this->jugadores[$jugador->getNumeroJug()] = $jugador;
    }

    public function getTotal(): int
    {
        $totalPuntos = 0;
        foreach ($this->jugadores as $jugador)
        {
            $totalPuntos += $jugador->getPtos();
        }
        return $totalPuntos;
    }

    /**
     * @return int
     */
    public function getNumJugadores(): int
    {
        return count($this->jugadores);
    }

}