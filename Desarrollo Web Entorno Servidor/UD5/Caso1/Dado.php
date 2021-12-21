<?php
/** Clase que emula un dado dando un número aleatorio.  */
class Dado
{
    private int $minNumDado;
    private int $maxNumDado;

    /** Se debe introducir el valor mínimo y máximo del dado.
     * @param int $min Número mínimo del dado
     * @param int $max Número máximo del dado
     */
    function __construct(int $min, int $max)
    {
        $this->minNumDado = $min;
        $this->maxNumDado = $max;
    }

    /**
     * Emula la tirada del dado.
     * @return int número aleatorio entre el rango de números al crear el dado
     */
    public function tirarDado(): int
    {
    return rand($this->minNumDado, $this->maxNumDado);
    }
}
