<?php

class Dado
{
    private int $minNumDado;
    private int $maxNumDado;
/**
 * 
 */
    function __construct(int $min, int $max)
    {
        $this->minNumDado = $min;
        $this->maxNumDado = $max;
    }

    public function tirarDado(): int
    {
    return rand($this->minNumDado, $this->maxNumDado);
    }
}
