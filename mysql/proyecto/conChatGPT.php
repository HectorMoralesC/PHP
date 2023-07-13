<?php
$errores = '';
$enviado = false;

// Si hemos hecho clic sobre el boton de BUSCAR:
if (isset($_POST['submit'])) {
    // Guardaremos el valor asignado por el usuario de la id en la variable $id
    $codigo = $_POST['codigo'];
    $campo = $_POST['campo'];

    // Error si no hay "id" seleccionada
    if (empty($codigo)) {
        $errores .= 'Por favor selecciona una id';
    }

    // Si han dado una id, cambiamos el $enviado a true, es decir, se enviará el formulario
    if (!$errores) {
        $enviado = true;
    }
}

require 'ej_index_view_busqueda.php';

// A partir del envio del formulario, se conecta y envia  a la base de datos esa ID
if ($enviado) {
    try {
        // Conectamos con la API PDO a las BBDD
        $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

        // Buscar datos del formulario "READ" SQL
        $campoTabla = $campo === 'codigocliente' ? 'CÓDIGOCLIENTE' : 'POBLACIÓN';

        $statement = $conexion->prepare("SELECT * FROM clientes WHERE $campoTabla = :codigo");
        $statement->execute(
            array(':codigo' => $codigo)
        );
        // Otro paquete de información en un array del registro de la ID seleccionada por el formulario
        $resultados = $statement->fetch();

        // Como mostramos los datos
        if ($resultados) {
            echo "<p style='text-align:center'> El registro es:</br> ";
            echo "ID:" . $resultados['EMPRESA'] . ' - ' . $resultados['DIRECCIÓN'] . ' - ' . $resultados['POBLACIÓN'];
            echo "</p>";
        }
        // Si no hay datos en el registro
        else {
            echo "<p style='text-align:center'>No existe el código $campo $codigo</p>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- Formulario -->


<!-- consulta sql -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="consulta">Ingresa tu consulta SQL:</label>
    <textarea name="consulta" rows="4" cols="50"></textarea>
    <br>
    <input type="submit" value="Enviar consulta">
</form>
<!-- consulta por desplegable -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="tabla">Selecciona una tabla:</label>
    <select name="tabla" id="tabla-select">
        <option value="usuarios">USUARIOS</option>
        <option value="clientes">CLIENTES</option>
        <option value="productos">PRODUCTOS</option>
        <option value="pedidos">PEDIDOS</option>
    </select>
    <br>
    <!--DEPLEGABLE USUARIOS -->
    <div id="opciones-usuarios" style="display: none;">
        <label for="opcion-usuario">Selecciona una opciÃ³n:</label>
        <select name="opcion-usuario">
            <option value="opcion1">OpciÃ³n 1</option>
            <option value="opcion2">OpciÃ³n 2</option>
        </select>
        <br>
    </div>
    <!--DEPLEGABLE CLIENTES -->
    <div id="opciones-clientes" style="display: none;">
        <label for="opcion-cliente">Selecciona una opciÃ³n:</label>
        <select name="opcion-cliente">
            <option value="opcion1">CÃ³digocliente</option>
            <option value="opcion2">PoblaciÃ³n</option>
        </select>
        <br>
    </div>
    <!--DEPLEGABLE PRODUCTOS -->
    <div id="opciones-productos" style="display: none;">
        <label for="opcion-producto">Selecciona una opciÃ³n:</label>
        <select name="opcion-producto">
            <option value="opcion1">CÃ³digoartÃ­culo</option>
            <option value="opcion2">NombreartÃ­culo</option>
        </select>
        <br>
    </div>
    <!--DEPLEGABLE PEDIDOS -->
    <div id="opciones-pedidos" style="display: none;">
        <label for="opcion-pedido">Selecciona una opciÃ³n:</label>
        <select name="opcion-pedido">
            <option value="opcion1">NÃºmero_de_pedido</option>
            <option value="opcion2">CÃ³digo_cliente</option>
        </select>
        <br>
    </div>
    <label for="busqueda">Ingresa el valor a buscar:</label>
    <input type="text" name="busqueda">
    <br>
    <input type="submit" value="Buscar">
</form>

<!--DEPLEGABLE PARA ESCOGER OPCION EN TABLA USUARIOS -->
<script>
    document.getElementById("tabla-select").addEventListener("change", function() {
        var opcionesUsuarios = document.getElementById("opciones-usuarios");
        if (this.value === "usuarios") {
            opcionesUsuarios.style.display = "block";
        } else {
            opcionesUsuarios.style.display = "none";
        }
    });
</script>
<!--DEPLEGABLE PARA ESCOGER OPCION EN TABLA CLIENTES -->
<script>
    document.getElementById("tabla-select").addEventListener("change", function() {
        var opcionesClientes = document.getElementById("opciones-clientes");
        if (this.value === "clientes") {
            opcionesClientes.style.display = "block";
        } else {
            opcionesClientes.style.display = "none";
        }
    });
</script>
<!--DEPLEGABLE PARA ESCOGER OPCION EN TABLA PRODUCTOS -->
<script>
    document.getElementById("tabla-select").addEventListener("change", function() {
        var opcionesProductos = document.getElementById("opciones-productos");
        if (this.value === "productos") {
            opcionesProductos.style.display = "block";
        } else {
            opcionesProductos.style.display = "none";
        }
    });
</script>
<!--DEPLEGABLE PARA ESCOGER OPCION EN TABLA PEDIDOS -->
<script>
    document.getElementById("tabla-select").addEventListener("change", function() {
        var opcionesPedidos = document.getElementById("opciones-pedidos");
        if (this.value === "pedidos") {
            opcionesPedidos.style.display = "block";
        } else {
            opcionesPedidos.style.display = "none";
        }
    });
</script>

