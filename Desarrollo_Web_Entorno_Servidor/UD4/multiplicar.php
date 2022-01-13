<!DOCTYPE html>
<html>
<body>
<?php
//estilos para la tabla
$borde = "border: black 1px solid";
$fondo = "background-color: #C5D2E7";
$padding = "padding: 0.2em 5em 0.5em 0.5em";
$borde_collapse = "border-collapse: collapse";
$cursiva = "font-style: italic";
$arial = "font-family: sans-serif";

//tablas de multiplicar a generar
$tablas = ["Primera" => 5, "Segunda" => 13, "Tercera" => 11];

//comenzamos la generación de la tabla y abrimos fila
$tabla = "<table style='$borde;$borde_collapse;$cursiva;$arial'><tr>";
//generamos títulos de las columnas con estilos
foreach ($tablas as $titulo => $val) {
    $tabla .= "<th style='$fondo;$borde;$padding'> $titulo tabla </th>";
}
$tabla .= "</tr>"; //cerramos fila
//creamos cada fila de cada número por el que se multiplica
for($i = 1; $i < 11; $i++) {
    $tabla .= "<tr>";
    foreach ($tablas as $num) {
        $resultado = $num*$i;
        $tabla .= "<td style='$borde;$padding'>$num"."x"."$i = $resultado</td>";
    }
    $tabla .= "</tr>"; //cerramos fila
}
$tabla .= "</table>"; //cerramos tabla
//imprimimos
echo $tabla;
?>
</body>
</html>



