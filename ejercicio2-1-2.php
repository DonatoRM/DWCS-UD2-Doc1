<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="Content-Type" content="text/html, charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="application-name" content="Ejercicio 2.1.2" />
    <meta name="description" content="Boletín 2 de la UD2 de Características del lenguaje PHP" />
    <meta name="keywords" content="html,css,php" />
    <meta name="author" content="Donato Ramos Martínez" />
    <title>Ejercicio 2.1.2</title>
    <link rel="stylesheet" type="text/css" href="./css/ejercicio2-1-2.css" media="screen" />
  </head>
  <body>
    <header>
      <h1>Ejercicio 2.1.2</h1>
      <hr />
    </header>
    <!-- Código PHP -->
    <?php
    session_start();
    function mostrarNumeroDeVeces()
    {
      static $numeroVeces = 0;
      $_SESSION["mySession"]++;
      $numeroVeces = $_SESSION["mySession"];
      echo "<p>Hola, esta página se ha mostrado $numeroVeces veces!</p>";
    }
    ?>
    <!-- Fin de Código PHP -->
    <main>
      <section>
        <!-- Código PHP -->
        <?php
        if (!isset($_SESSION["mySession"])) {
          $_SESSION["mySession"] = 0;
        }
        mostrarNumeroDeVeces();
        ?>
        <!-- Fin de código PHP -->
      </section>
    </main>
  </body>
</html>
