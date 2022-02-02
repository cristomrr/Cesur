<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Creación de sesiones</title>
</head>

<body class="body">
<?php
session_start();
$sesionON = false;
if (isset($_SESSION["user"])) {
    $sesionON = true;
}
$user = ($sesionON) ? $_SESSION["user"] : "ninguno";
?>

<header class="header">
    <img src="./cesur.png" alt="Logo Cesur">
    <h1 class="titulo-pag">Tarea 1 de UD9 para Entornos de servidor 2ºDAW</h1>
    <?php
    if ($sesionON) {
        echo "<h2 class='titulo-usuario'> $user </h2>
              <form class='offsesion' action='action.php' method='post'>
                <input class='input-f btn-offsesion' type='submit' name='accion' value='Salir'>
              </form>";
    }
    ?>
</header>
<main class="main">
    <section class="seccion-form">
        <form class="form-ud9">
            <fieldset class="field-ud9">
                <legend class="titulo-f">Sesión iniciada con:</legend>
                <input class="input-f res" type="text" value="<?php echo $user ?>">
            </fieldset>
        </form>
    </section>
</main>
<footer class="footer">
    <p class="autor">Copyright &copy; 2021 Cristo Manuel Rodríguez Rodríguez, todos los derechos reservados</p>
</footer>
</body>

</html>