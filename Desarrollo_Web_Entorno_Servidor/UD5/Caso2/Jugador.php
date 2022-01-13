<?php

class Jugador
{
    private int $numeroJug, $ptos;

    /**
     * @param $numeroJug
     */
    public function __construct($numeroJug)
    {
    $this->numeroJug = $numeroJug;
    $this->ptos = 0;
    }

    /**
     * @return int
     */
    public function getNumeroJug(): int
    {
        return $this->numeroJug;
    }

    /**
     * @return int
     */
    public function getPtos(): int
    {
        return $this->ptos;
    }

    /**
     * @param int $ptos
     */
    public function addPtos(int $ptos): void
    {
        if($ptos>0) {
            $this->ptos += $ptos;
        }
    }


}