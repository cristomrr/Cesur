<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Lobster&family=Moon+Dance&family=Neonderthaw&family=Supermercado+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>UD9 Servidores - Carrito de compra</title>
</head>

<body class="flex-between">
    <header class="hdr flex-between">
        <h1 class="title">CMRR Soluciones informáticas</h1>
        <form class='flex-center' action='./accion.php' method='post'>
            <button type='submit' name='seccion' value='home'>Home</button>
            <button type='submit' name='seccion' value='pc'>Ordenadores</button>
            <button type='submit' class='btn-carrito' name='seccion' value='carrito'>
                <img src='./images/carrito.png' alt='Carrito de compra' class='carrito'>
            </button>
        </form>
    </header>
    <main class="main flex-center">
        <form class="form-tarjetas" action="./accion.php" method="post">
            <section class="flex-center">
                <button class="flex-center tarjeta" type="submit" name="seccion" value="pc">
                    <img src="./images/seccion_pc.png" alt="Sección ordenadores">
                    <div class="info-tarjeta">
                        <h4>Ordenadores personales</h4>
                        <p>Las últimas novedades de ordenadores a la venta</p>
                    </div>
                </button>
            </section>
        </form>
    </main>
    <footer class="ftr flex-center">
        <p class="autor">Copyright &copy; 2021 Cristo Manuel Rodríguez Rodríguez, todos los derechos reservados</p>
    </footer>
</body>

</html>