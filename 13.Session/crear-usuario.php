<?php
session_start();//Inicia sesión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el nombre de usuario ingresado en el formulario
    $nombreUsuario = $_POST['nombreUsuario'];

    // Guardar el nombre de usuario en la sesión
    $_SESSION['nombreUsuario'] = $nombreUsuario;

    // Redireccionar a la página de comprobación
    header("Location: guardar-usuario.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear</title>
    <link rel="stylesheet" href="estilo-sesion.css">
</head>
<body>
    <h1>Ingrese su nombre de usuario:</h1>
    <form method="POST" action="">
        <input type="text" name="nombreUsuario" required>
        <button type="submit">Crear usuario</button>
    </form>
</body>
</html>