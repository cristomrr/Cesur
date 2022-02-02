<?php

abstract class Main
{


    public static function home()
    {
        echo "<main class='main'>
                <h2>¿Qué información de los actores quieres ver?</h2>
                <div class='secciones  flex-center'>
                    <section class='opciones  flex-center'>
                        <form action='./app.php' method='post'>
                             <input type='image' src='./images/carpeta_actores.png' alt='Submit'>
                             <input type='text' name='pag' value='Actores' class='letrero'>
                        </form>
                        <form action='./app.php' method='post'>
                            <input type='image' src='./images/carpeta_season.png' alt='Submit'>
                            <input type='text' name='pag' value='Temporadas' class='letrero'>
                        </form>
                    </section>
                </div>
                </main>";
    }

    public static function temporadas()
    {
        echo "<main class='main'>
                <h2>Elige la temporada</h2>
                <div class='secciones  flex-center'>
                    <section class='opciones  flex-center'>";

        for ($i = 0; $i < 9; $i += 1) {
            $texto = ($i > 0) ? "$i" : "Todas";
            echo "<form action='./app.php' method='post'>
                <input type='image' src='./images/season$i.png' alt='Submit'>
                <input type='text' name='pag' value='$texto' class='letrero'>
            </form>";
        }
        echo "</section>
                </div>
                </main>";
    }

    public static function infoActor($datos)
    {
        $totalActores = count($datos);
        echo "<main class='main'>
                    <h2>Información de $totalActores personajes de la serie</h2>
                    <div class='secciones  flex-center'>
                    <section class='info-actor  flex-center'>
                        <table class='tabla-actores'>
                                <tr>
                                    <th>ID</th>
                                    <th>Descripción completa</th>
                                    <th>Personaje</th>
                                    <th>Episodios</th>
                                    <th>Comienzo</th>
                                    <th>Fin</th>
                                    <th>Título</th>
                                    <th>Actor/Actriz</th>
                                </tr>";


        foreach ($datos as $actor) {
            echo "<tr>
                            <td>$actor[id]</td>
                            <td>$actor[full_desc]</td>
                            <td>$actor[serie_name]</td>
                            <td>$actor[episodes]</td>
                            <td>$actor[season_start]</td>
                            <td>$actor[season_end]</td>
                            <td>$actor[title]</td>
                            <td>$actor[name]</td>
                        </tr>";
        }
        echo "</table>
                    </section>
                    </div>
                    </main>";
    }

    public static function infoTemporadas($datos, $episodio = 1)
    {
        $totalResultados = count($datos);
        echo "<main class='main'>
                    <h2>Información de los personajes de la serie. Resultados 
                    $totalResultados de nº episodio $episodio</h2>
                   <section class='flex-center form'>
                       <form action='./app.php' method='post' class='busqueda flex-center'>
                           <label for='nepi'>Buscar por episodio</label>
                              <select name='pag' id='nepi'>";

        for ($i = 1; $i < 11; $i++) {
            echo "<option value='E$i'>$i</option>";
        }
        echo "                 </select>
                            <input type='submit' value='Buscar' class='btn-buscar'>
                       </form>
                    </section>
                    <div class='secciones  flex-center'>
                        
                        <section class='info-actor  flex-center'>
                            <table class='tabla-actores'>
                                    <tr>
                                        <th>ID</th>
                                        <th>Actor/Actriz</th>
                                        <th>Personaje</th>
                                        <th>Episodio</th>
                                        <th>Temporada</th>
                                        <th>Título</th>
                                    </tr>";
        foreach ($datos as $actor) {
            echo "<tr>
                      <td>$actor[id]</td>
                      <td>$actor[name]</td>
                      <td>$actor[serie_name]</td>
                      <td>$actor[episode]</td>
                      <td>$actor[season]</td>
                      <td>$actor[title]</td>
                  </tr>";
        }
        echo "</table>
                    </section>
                    </div>
                    </main>";
    }

    public static function error($mensaje)
    {
        echo "<main class='main'>
                <h2>¡¡Ha habido un error!!</h2>
                <div class='secciones  flex-center'>
                    <section class='opciones  flex-center'>
                        <form action='' method='post' id='form-error' class='flex-center'>
                            <input type='image' src='./images/error.png' alt='Submit'>
                            <input type='text' name='pag' value='$mensaje' class='letrero' id='error'>
                        </form>
                    </section>
                </div>
               </main>";
    }
}