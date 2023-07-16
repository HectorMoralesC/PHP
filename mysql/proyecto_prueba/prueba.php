<!DOCTYPE html>
<html>
<head>
  <title>Recopilación de datos</title>
</head>
<body>
  <h1>Recopilación de datos</h1>

  <form method="POST" action="index.php">
    <label for="opcion">Seleccione una opción:</label>
    <select name="opcion">
      <option value="opcion1">Opción 1</option>
      <option value="opcion2">Opción 2</option>
      <option value="opcion3">Opción 3</option>
    </select>
    <br><br>
    <input type="submit" value="Enviar">
  </form>

  <?php
  // Verificar si se ha enviado el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la opción seleccionada
    $opcion = $_POST["opcion"];

    // Conectarse a la base de datos
    $servername = "localhost";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $database = "nombre_de_tu_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
      die("Error al conectar a la base de datos: " . $conn->connect_error);
    }

    // Consultar los datos según la opción seleccionada
    $sql = "SELECT * FROM tabla WHERE opcion = '$opcion'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<h2>Datos encontrados:</h2>";
      while ($row = $result->fetch_assoc()) {
        echo "Campo 1: " . $row["campo1"] . "<br>";
        echo "Campo 2: " . $row["campo2"] . "<br>";
        echo "Campo 3: " . $row["campo3"] . "<br><br>";
      }
    } else {
      echo "No se encontraron datos.";
    }

    $conn->close();
  }
  ?>

</body>
</html>