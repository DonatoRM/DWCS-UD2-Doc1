<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="application-name" content="UD 2 Características del lenguaje PHP" />
        <meta name="description" content="Boletín de ejercicios 1" />
        <meta name="keywords" content="php" />
        <meta name="author" content="Donato Ramos Martínez" />
        <title>Ejercicio 2.1.1.</title>
        <link rel="stylesheet" type="text/css" href="./css/ejercicio2-1-1.css" media="screen" />
    </head>
    <body>
        <ul>
            <?php
            define('A', 10);
            define('B', 7);
            echo '<li>' . A . ' + ' . B . ' = ' . A + B . '</li>';
            echo '<li>' . A . ' - ' . B . ' = ' . A - B . '</li>';
            echo '<li>' . A . ' * ' . B . ' = ' . A * B . '</li>';
            echo '<li>' . A . ' / ' . B . ' = ' . A / B . '</li>';
            ?>
        </ul>
    </body>
</html>
