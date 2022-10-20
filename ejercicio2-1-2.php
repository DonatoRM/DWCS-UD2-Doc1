<!DOCTYPE html>
<?php function mensaje()
{
    static $contador;
    $contador++;
    echo "<p>Hola, esta página se ha mostrado $contador veces !</p>";
} ?>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="application-name" content="UD 2 Características del lenguaje PHP" />
        <meta name="description" content="Boletín de ejercicios 1" />
        <meta name="keywords" content="php" />
        <meta name="author" content="Donato Ramos Martínez" />
        <title>Título de la página</title>
        <link rel="stylesheet" type="text/css" href="./css/ejercicio2-1-2.css" media="screen" />
    </head>   
    <body>
        <header>
            <h1>Ejercicio 2.1.2.</h1>
        </header>
        <main>
            <section>
                <?php mensaje(); ?>
            </section>
        </main>
    </body>
</html>
