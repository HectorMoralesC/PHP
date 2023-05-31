


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la fecha ingresada por el usuario
    $fecha_escogida = $_POST["fecha"];
    echo 'Fecha escogida por el usuario <strong>' .$fecha_escogida. '</strong>';
    echo '<br>';

    //Obtener fecha actual
    $fecha_actual = date("Y-m-d");
    echo 'Fecha actual <strong>' .$fecha_actual.'</strong>';
    echo '<br>';

    //Comparación de fechas
    if ($fecha_escogida < $fecha_actual){

        echo "La fecha escogida es anterior a la fecha actual y han pasado <strong>  ";
        $dias_pasados = (strtotime($fecha_actual) - strtotime($fecha_escogida)) / (60 * 60 * 24);
        echo intval ($dias_pasados). '</strong> dias desde la fecha escogida';
    }
    elseif($fecha_escogida == $fecha_actual){

        echo "La fecha escogida es <strong> hoy </strong> .";


    }
    else{
        
        echo "La fecha escogida es posterior a la fecha actual y faltan <strong>";
        $dias_faltan = (strtotime($fecha_escogida) - strtotime($fecha_actual)) / (60 * 60 * 24);
        echo intval($dias_faltan). '</strong>    dias hasta la fecha escogida';
       


    }

    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verificar fecha</title>
</head>
<body>
    <h2>Verificar fecha</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
         <label for="fecha">Ingrese una fecha:</label> 
      <!-- SIRVE PARA HACER EL CUADRO DE ESCOGER FECHA -->
      <input type="date" id="fecha" name="fecha" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>