<?php

// print_r($_GET);


#Muestra en pantalla lo que hemos rellenado del formulario se puede editar y modificar el array del get
//Incluso inyectar c�digo: <h1>Hola</h1> o <script>alert('Hola')</script>

if(!$_GET) {
    header('Location: http://localhost/PHP-2023/12.App-Formulario-Contacto-PHP/ejemplo-form-index.php'); //Carpeta y archivo para rellenar el form correcto
}
if ($_GET['nombre']) { //VALIDACI�N NOMBRE
    $nombre = $_GET['nombre'];
}
else {
    echo 'El usuario no ha escrito su nombre';
}
if ($_GET['sexo']) { //VALIDACI�N SEXO
    $sexo = $_GET['sexo'];
}
else {
    echo 'El usuario no ha escrito su sexo';
}
if ($_GET['fecha']) { //VALIDACI�N FECHA
    $fecha = $_GET['fecha'];
}
else {
    echo 'El usuario no ha escrito su fecha';
}
if ($_GET['terminos']) { //VALIDACI�N TERMINOS
    $terminos = $_GET['terminos'];
}
else {
    echo 'El usuario no ha aceptado terminos';
}
$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$fecha = $_GET['fecha'];
$terminos = $_GET['terminos'];

echo 'Hola ' . $nombre . ' eres un ' . $sexo . ' y has escogido la fecha: '. $fecha;

?>