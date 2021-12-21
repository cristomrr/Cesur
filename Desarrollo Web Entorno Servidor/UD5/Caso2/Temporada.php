<!DOCTYPE html>
<html lang="es">
<body>
<?php

require 'Equipo.php';

$tenerife_team = new Equipo();

for ($i = 1; $i < 10; $i++) {

    $jugador = new Jugador($i);
    $tenerife_team->addJug($jugador);

    $tenerife_team->getJug($i)->addPtos(rand(20, 100));
}

$resultado = $tenerife_team->getTotal();
echo "<h1>$resultado</h1>";

?>
</body>
</html>