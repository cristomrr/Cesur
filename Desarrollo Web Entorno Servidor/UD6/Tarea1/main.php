<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Creación formulario</title>
</head>

<body class="body">

    <header class="header">
        <img src="./cesur.png" alt="Logo Cesur">
        <h1 class="titulo-pag">Tarea 1 de UD6 para Entornos de servidor 2ºDAW</h1>
    </header>

    <main class="main">

        <?php
        $calle = (isset($_POST["calle"])
            ? htmlentities(addslashes($_POST["calle"]))
            : "dato no encontrado");
        $numero = (isset($_POST["numero"])
            ? htmlentities(addslashes($_POST["numero"]))
            : "dato no encontrado");
        $poblacion = (isset($_POST["poblacion"])
            ? htmlentities(addslashes($_POST["poblacion"]))
            : "dato no encontrado");
        $pais = (isset($_POST["pais"])
            ? htmlentities(addslashes($_POST["pais"]))
            : "dato no encontrado");
        ?>
        <section class="seccion-form">
            <form class="form-ud6">
                <fieldset class="field-ud6">
                    <legend class="titulo-f">Respuesta del servidor</legend>
                    <label>Calle: </label>
                    <input class="input-f" type="text" readonly value="<?php echo $calle ?>">
                    <label>Número: </label>
                    <input class="input-f" type="text" readonly value="<?php echo $numero ?>">
                    <label>Población: </label>
                    <input class="input-f" type="text" readonly value="<?php echo $poblacion ?>">
                    <label>País: </label>
                    <input class="input-f" type="text" readonly value="<?php echo $pais ?>">
                    </label>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>

    <footer class="footer">
        <p class="autor">Copyright &copy; 2021 Cristo Manuel Rodríguez Rodríguez, todos los derechos reservados</p>
    </footer>

</body>

</html>