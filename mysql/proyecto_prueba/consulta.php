<?php

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=bd_proyecto', 'root', '');
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    //Buscar datos del formulario "READ" SQL
    $statementConsulta = $conexion->query('SELECT CÓDIGOCLIENTE FROM clientes');
    //Otro paquete de información en un array del registro de la ID seleccionada por el formulario
    $resultadosConsulta = $statementConsulta->fetchAll();
    //Como mostramos los datos

?>