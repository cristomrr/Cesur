<!DOCTYPE html>
<html lang="es">
<body>
<?php
#Importamos la clase con require para que no continúe si hay algún error
require_once 'Dado.php';
#Creamos el dado con los números max y min solicitados
$dado = new Dado(0, 12);
#Almacenamos el resultado de la tirada del dado
$resultado = $dado->tirarDado();

#Imrpimimos el resultado
echo "<h1>$resultado</h1>";
#fin
?>
</body>
</html>
