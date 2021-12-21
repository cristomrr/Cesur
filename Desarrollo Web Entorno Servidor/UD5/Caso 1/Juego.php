<!DOCTYPE html>
<html lang="es">
<body>
<?php

require 'Dado.php';

$dado = new Dado(0, 12);

$resultado = $dado->tirarDado();

echo "<h1>$resultado</h1>";

?>
</body>
</html>
