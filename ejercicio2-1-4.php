<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="application-name" content="Ejercicio 2.1.4.">
    <meta name="description" content="UD2 Características del lenguaje PHP">
    <meta name="keywords" content="php">
    <meta name="author" content="Donato Ramos Martínez">
    <title>Ejercicio 2.1.4.</title>
    <link rel="stylesheet" type="text/css" href="./css/ejercicio2-1-4.css" media="screen">
</head>
<body>
    <header>
        <h1>Ejercicio 2.1.4.</h1>
    </header>
    <main>
        <section>
            <?php
            define('NUMERO', 1);
            for ($i = 1; $i <= 10; $i++) {
                echo '<p>' . $i . ' x ' . NUMERO . ' = ' . $i * NUMERO . '</p>';
            }
            ?>
        </section>
    </main>
</body>
</html>