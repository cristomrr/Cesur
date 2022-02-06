<?php

abstract class MainView
{

    public static function articulos($articulos, $titulo)
    {
        if (isset($articulos)) {
        echo "  <h2 class='s-title'>$titulo</h2>
                <form class='form-tarjetas' action='accion.php' method='post'>
                    <section class='flex-center'>";

            foreach ($articulos as $articulo) {
                echo "<button class='flex-center tarjeta' type='submit' name='id' value='$articulo[id]'>
                        <img src='$articulo[img]' alt='$articulo[nombre]'>
                        <div class='info-tarjeta'>
                            <h4>$articulo[nombre]</h4>
                            <p>$articulo[descripcion]</p>
                            <p><b>Precio: </b> $articulo[precio]</p>
                        </div>
                      </button>
                      <input class='oculto' type='text' name='seccion' value='infoarticulo'>";
            }
            echo "    </section>
                </form>";
        }
    }

    public static function infoArticulo($articulo)
    {
        echo "    <form class='form-tarjetas' action='accion.php' method='post'>
                    <section class='flex-center' id='section-infoarticulo'>
                        <button class='flex-center tarjeta infoarticulo'>
                            <img src='$articulo[img]' alt='$articulo[nombre]'>
                            <div class='info-tarjeta flex-center'>
                                <h4>$articulo[nombre]</h4>
                                <p>$articulo[descripcion]</p>
                                <label for='ref'>Número referencia: 
                                    <input type='text' id='ref' name='id' value='$articulo[id]'>
                                </label>
                            </div>
                        </button>
                        <input class='precio' type='text' name='precio' value='$articulo[precio] €'>
                        <label for='cantidad'>Cantidad: 
                            <input type='number' name='cantidad' id='cantidad' min='1' max='100' value='1'>
                        </label>
                        <button type='submit' name='seccion' value='Añadir al carrito'>Añadir al carrito</button>
                    </section>
                 </form>";
    }

    public static function carrito($articulos, $titulo, $cantidad)
    {
        echo "  <h2 class='s-title'>$titulo</h2>
                <form class='form-tarjetas' action='accion.php' method='post'>
                    <section class='flex-center'>";

        if (isset($articulos)) {
            foreach ($articulos as $articulo) {
                $id = $articulo['id'];
                echo "<button class='flex-center tarjeta' type='submit' name='id' value='$articulo[id]'>
                    <img src='$articulo[img]' alt='$articulo[nombre]'>
                    <div class='info-tarjeta'>
                        <h4>$articulo[nombre]</h4>
                        <p>$articulo[descripcion]</p>
                        <p><b>Precio: </b> $articulo[precio]</p>
                        <p><b>Cantidad: </b> $cantidad[$id]</p>
                    </div>
                    </button>
                    <input class='oculto' type='text' name='seccion' value='infoarticulo'>";
            }
        }
        echo "    </section>
                </form>";

        echo " <form class='form-btn-carrito' action='accion.php' method='post'>
                  <button type='submit' name='seccion' value='Hacer compra'>Realizar compra</button>
                  <button type='submit' name='seccion' value='Vaciar carrito'>Vaciar el carrito</button>
               </form>";
    }

    public static function error($titulo) {

        echo "  <h2 class='s-title'>$titulo</h2>";
    }
}