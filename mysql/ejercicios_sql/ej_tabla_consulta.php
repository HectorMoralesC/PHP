<?php

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    //Buscar datos del formulario "READ" SQL
    $statementConsulta = $conexion->query('SELECT C�DIGOART�CULO FROM productos LIMIT 5');
    $statementConsulta1 = $conexion->query('SELECT SECCI�N FROM productos LIMIT 5');
    $statementConsulta2 = $conexion->query('SELECT NOMBREART�CULO FROM productos LIMIT 5');
    $statementConsulta3 = $conexion->query('SELECT PRECIO FROM productos LIMIT 5');
    //Otro paquete de informaci�n en un array del registro de la ID seleccionada por el formulario
    $resultadosConsulta = $statementConsulta->fetchAll();
    $resultadosConsulta1 = $statementConsulta1->fetchAll();
    $resultadosConsulta2 = $statementConsulta2->fetchAll();
    $resultadosConsulta3 = $statementConsulta3->fetchAll();
    //Como mostramos los datos

?>
