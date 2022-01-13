<?php

/**
 * Clase que contiene cada una de las vistas disponibles para el usuario
 */
class Vista
{

    public function __construct() {}

    public function header()
    {
        echo '<!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <link rel="stylesheet" href="./style.css">
                    <title>Países por Cristo MRR</title>
                </head>
                <body>
                <header class="header">
                    <h1 class="title">Países del mundo</h1>
                </header>';
    }

    public function mainDatosPaises($datos)
    {
        $codigo = "<main class='main'>
                        <table class='tabla-paises'>
                            <tr>
                                <th>id</th>
                                <th>País</th>
                                <th>Continente</th>
                            </tr>";
        foreach ($datos[0] as $pais) {
            $codigo .= "<tr>
                            <td>$pais[id]</td>
                            <td>$pais[nombre]</td>
                            <td>$pais[continente]</td>
                        </tr>";
        }
        $codigo .= "    </table> 
                    </main>";
        echo $codigo;
    }

    public function footer()
    {
        echo '<footer class="footer">
                     <p class="author">Cristo Manuel Rodríguez Rodríguez</p>
                </footer>
                </body>
                </html>';
    }
}