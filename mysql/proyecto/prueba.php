<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="consulta">Ingresa tu consulta SQL:</label>
    <textarea name="consulta" rows="4" cols="50"></textarea>
    <br>
    <input type="submit" value="Enviar consulta">
</form>

<?php
// Verificar si se envi� una consulta
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener la consulta ingresada por el usuario
    $consulta = $_POST["consulta"];

    // Ejecutar la consulta en la base de datos
    // Aqu� debes utilizar tu c�digo de conexi�n a la base de datos y ejecutar la consulta
    // El siguiente c�digo es solo un ejemplo b�sico

    //Conexi�n
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=proyecto', 'root', '');
    } catch (PDOException $e) {
        echo 'ERROR: '. $e->getMessage();
        die();
    }

    // Crear conexi�n
    $conn = new mysqli($servername, $dbname, $password, $password);

    // Verificar si la conexi�n fue exitosa
    if ($conn->connect_error) {
        die("Error de conexi�n: " . $conn->connect_error);
    }

    // Ejecutar la consulta
    $result = $conn->query($consulta);

    // Verificar si la consulta se ejecut� correctamente
    if ($result) {
        // Mostrar los resultados de la consulta
        echo "Resultados de la consulta:<br>";
        while ($row = $result->fetch_assoc()) {
            // Imprimir los datos de cada fila
            echo "Columna 1: " . $row["columna1"] . ", Columna 2: " . $row["columna2"] . "<br>";
        }
    } else {
        // Mostrar mensaje de error si la consulta falla
        echo "Error en la consulta: " . $conn->error;
    }

    // Cerrar la conexi�n
    $conn->close();
}
?>