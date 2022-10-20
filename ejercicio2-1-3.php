<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="application-name" content="Ejercicio 2.1.3" />
        <meta name="description" content="Boletín de ejercicios 1" />
        <meta name="keywords" content="php" />
        <meta name="author" content="Donato Ramos Martínez" />
        <title>Ejercicio 2.1.3.</title>
        <link rel="stylesheet" type="text/css" href="./css/ejercicio2-1-3.css" media="screen" />
    </head>
    <body>
        <header>
            <h1>Ejercicio 2.1.3.</h1>
        </header>
        <main>
            <section>
                <?php
                define('INICIO', 1);
                define('FIN', 50);
                $suma = 0;
                for ($i = INICIO; $i <= FIN; $i++) {
                    $suma += $i;
                }
                echo '<p>La suma de los números de ' . INICIO . ' a ' . FIN . " es $suma</p>";
                ?>
            </section>
        </main>
    </body>
</html>
