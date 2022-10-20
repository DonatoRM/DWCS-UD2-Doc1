<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="application-name" content="Ejercicio 2.1.5.">
    <meta name="description" content="UD2 Características del lenguaje PHP">
    <meta name="keywords" content="php">
    <meta name="author" content="Donato Ramos Martínez">
    <title>Ejercicio 2.1.5.</title>
    <link rel="stylesheet" type="text/css" href="./css/ejercicio2-1-5.css" media="screen">
</head>
<body>
    <header>
        <h1>Ejercicio 2.1.5.</h1>
    </header>
    <main>
        <section>
            <div>
                <header>
                    <h2>
                    <?php
                    define('NUM1', 2);
                    define('NUM2', 3);
                    define('INICIO', 1);
                    define('FIN', 100);
                    echo 'Múltiplos de ' . NUM1 . ' y ' . NUM2 . ' entre ' . INICIO . ' y ' . FIN;
                    ?>
                    </h2>
                </header>
                <ul>
                <?php for ($i = INICIO; $i <= FIN; $i++) {
                    if ($i % NUM1 == 0 || $i % NUM2 == 0) {
                        echo "<li>$i</li>";
                    }
                } ?>
                </ul>
            </div>
        </section>
    </main>
</body>
</html>