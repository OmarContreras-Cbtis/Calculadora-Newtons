<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/a/ae/MO-supp-N.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Newtons</title>
</head>
<body>
<div class="navegar">
            <ul>
                <li>
                    <a href="index.html">
                            <span class="icono"><i class="fa fa-home" aria-hidden="true"></i></i></span>
                            <span class="titulo">Inico</span>
                    </a>
                </li>
                <li>
                    <a href="kilogramos.html">
                            <span class="icono"><i class="fa fa-calculator" aria-hidden="true"></i></span>
                            <span class="titulo">Kilogramos</span>
                    </a>
                </li>
                <li>
                    <a href="libras.html">
                            <span class="icono"><i class="fa fa-calculator" aria-hidden="true"></i></span>
                            <span class="titulo">Libras</span>
                    </a>
                </li>
                <li>
                    <a href="Peso.html">
                            <span class="icono"><i class="fa fa-calculator" aria-hidden="true"></i></span>
                            <span class="titulo">Peso-Masa</span>
                    </a>
                </li>
            </ul>
    </div>
    <!--FIN DEL MENU DESPLEGABLE-->

    <div class="cajaT" ><h1 align="center">Calculadora De Newtons</h1></div>

    <?php

        $kilos=filter_input(INPUT_POST,'kilos');
        $newtons = $kilos * 9.80;
        ?>
        <div class="cajaT2">
        <h2>
            Tus Kg en newtons son:
            <?php
            echo $newtons
            ?>
        </h2>
        </div>
</body>
</html>