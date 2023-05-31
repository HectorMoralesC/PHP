<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Cookie</title>
    <link rel="stylesheet" type="text/css" href="ejemplo-estilo.css">
</head>
<body>
    <div class="container">
        <h1>Valor de la Cookie</h1>
        <div class="cookie-content">
            <?php
            // Comprueba si la cookie está presente
            if(isset($_COOKIE["miCookie"])) {
                // Obtiene el valor de la cookie
                $valor = $_COOKIE["miCookie"];
                echo "<p>" . $valor . "</p>";
            } else {
                echo "<p>La cookie no está presente.</p>";
            }
            ?>
        </div>
    </div>
    <a href="ejemplo-establecer-cookie.php">Volver a establecer</a>
</body>
</html>