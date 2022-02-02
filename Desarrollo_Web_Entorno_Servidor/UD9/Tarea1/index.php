<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
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
        <form class="form-ud9" action="action.php" method="post">
            <fieldset class="field-ud9">
                <legend class="titulo-f">UD9 Servidores: Sesiones</legend>
                <div class="input-caja-f">
                    <input class="ocultar" type="text" name="accion" value="Iniciar">
                    <input class="input-f" type="text" id="fuser" name="usuario" value="" required>
                    <label class="label-f" for="fuser">
                        <div class="title-input-f">Nombre de usuario</div>
                    </label>
                </div>
                <input type="submit" class="submit-f" value="Enviar datos al servidor">
            </fieldset>
        </form>
    </section>

    <section class="seccion-aviso ocultar">
        <div class="ventana-aviso">
            <p class="aviso"> Realizaremos un inicio de sesión en php <br>¿ Deseas iniciar sesión ?</p>
            <div class="datos-aviso"></div>
            <div class="botones-aviso">
                <input type="button" class="a-confirmar" value="Confirmar">
                <input type="button" class="a-cancelar" value="Cancelar">
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <p class="autor">Copyright &copy; 2021 Cristo Manuel Rodríguez Rodríguez, todos los derechos reservados</p>
</footer>

</body>

</html>
