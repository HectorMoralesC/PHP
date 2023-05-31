<?php
session_start(); //Continua sesión

// Verificar si el nombre de usuario existe en la sesión
if (isset($_SESSION['nombreUsuario']) && isset($_POST['comprobarUsuario'])) {
    $comprobarUsuario = $_POST['comprobarUsuario'];
    // Comprobar si el usuario es correcto
    if ($_SESSION['nombreUsuario'] === $comprobarUsuario) {
        echo "¡Bienvenido, $comprobarUsuario !";
    } else {
        echo "Usuario incorrecto.";
    }
} else {
    echo "Por favor, inicia sesión";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Guardar</title>
    
</head>
<body>
    <h1>Comprobar Usuario</h1>
    <form method="POST" action="">
        <label>Ingrese su nombre de usuario:</label>
        <input type="text" name="comprobarUsuario" >
        <button type="submit">Iniciar sesión</button>
        
        
    </form>
    <a href="../13.Session/cerrar-usuario.php"><button>Cerrar Sesión</button></a>
    <a href="./crear-usuario.php"><button>Volver</button></a>
</body>
</html>