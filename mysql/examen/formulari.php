<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
    
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error de connexió: " . $e->getMessage() . "<br/>";
    die();
}

// Función para obtener todas las filas de la tabla
function obtenerTodasLasDades() {
    global $conexion;
    $stmt = $conexion->prepare("SELECT * FROM tabla_examen");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Función para actualizar una fila de la tabla
function actualizarDades($id, $nom, $correu) {
    global $conexion;
    $stmt = $conexion->prepare("UPDATE tabla_examen SET nom = :nom, correu = :correu WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':correu', $correu);
    $stmt->execute();
}

// Función para borrar una fila de la tabla
function borrarDades($id) {
    global $conexion;
    $stmt = $conexion->prepare("DELETE FROM tabla_examen WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        // Ejecutar la acción correspondiente
        if ($_POST['action'] == 'crear') {
            $nom = $_POST['nom'];
            $correu = $_POST['correu'];
            try {
                $stmt = $conexion->prepare("INSERT INTO tabla_examen (nom, correu) VALUES (:nom, :correu)");
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':correu', $correu);
                $stmt->execute();
                echo "Dades inserides amb èxit!";
            } catch (PDOException $e) {
                print "Error d'inserció: " . $e->getMessage() . "<br/>";
            }
        } elseif ($_POST['action'] == 'actualitzar') {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $correu = $_POST['correu'];
            actualizarDades($id, $nom, $correu);
            echo "Dades actualitzades amb èxit!";
        } elseif ($_POST['action'] == 'esborrar') {
            $id = $_POST['id'];
            borrarDades($id);
            echo "Dades esborrades amb èxit!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulari de recopilació de dades</title>
</head>
<body>
    <h2>Omple el formulari:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nom: <input type="text" name="nom" required><br>
        Correu: <input type="email" name="correu" required><br>
        <input type="hidden" name="action" value="crear">
        <input type="submit" value="Enviar">
    </form>

    <h2>Dades actuals:</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Correu</th>
            <th>Accions</th>
        </tr>
        <?php
        // Obtenim totes les dades de la taula i les mostrem en una taula
        $dades = obtenerTodasLasDades();
        foreach ($dades as $fila) {
            echo "<tr>";
            echo "<td>{$fila['id']}</td>";
            echo "<td>{$fila['nom']}</td>";
            echo "<td>{$fila['correu']}</td>";
            echo "<td>
                    <form method='post' action='{$_SERVER['PHP_SELF']}'>
                        <input type='hidden' name='id' value='{$fila['id']}'>
                        <input type='hidden' name='nom' value='{$fila['nom']}'>
                        <input type='hidden' name='correu' value='{$fila['correu']}'>
                        <input type='hidden' name='action' value='actualitzar'>
                        <input type='submit' value='Actualitzar'>
                    </form>
                    <form method='post' action='{$_SERVER['PHP_SELF']}'>
                        <input type='hidden' name='id' value='{$fila['id']}'>
                        <input type='hidden' name='action' value='esborrar'>
                        <input type='submit' value='Esborrar'>
                    </form>
                </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
