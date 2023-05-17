<?php

//Codi PHP

//Ejemplo de un arrays con los dias de la semana.
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
//Ordeno el array alfabéticamente
sort($semana); //FunciÃ³n del array que queremos ordenar


class Impressora {

//Atributs

    public $tinta = true;

    public $paper = true;

    public $tamany = 'DINA4';

    public $color = 'negre';

    //Metodes

    function imprimeix($tinta, $paper, $tamany, $color) {

        if ($tinta && $paper && $color) {

        echo 'Es pot imprimir en ' .$tamany. ' en color ' .$color. '.';
        }


        else{

        echo 'Falta tinta o paper';
        }
    }

}



?>



<!DOCTYPE html> 

<html lang="es">

<head>

<title>Impressió del document</title>

</head> 
<body>

<h1>Titular del document </h1> 

<ul>
		<?php
			foreach($semana as $NewSemana){
				echo '<li>' . $NewSemana . '</li>';
			}
		?>
</ul>

<?php
    // Crear una instancia de la clase Impressora
    $impresora = new Impressora();
    
    // Llamar a la función imprimeix
    $impresora->imprimeix($impresora->tinta, $impresora->paper, $impresora->tamany, $impresora->color);
    ?>
<!--Codi PHP-->

<p>Ejercicio 1. XAMPP es una herramienta que permite instalar y configurar fácilmente un servidor web local en su propio ordenador. Este entorno de servidor local te permite desarrollar y probar aplicaciones web antes de publicarlas en un servidor online. Algunas de las funciones principales de XAMPP son: Apache, MySQL y PHP.</p>
<p>Para utilizarlo primero has de instalar Xampp, después inicial el servidor Apache y MySQL, a continuación coloca tu archivo PHP en la carpeta 'htdocs y finalmente abre en tu navegador "http://localhost/nombre_del_fichero.php"</p>
<br>
<br>
<p>Ejercicio 2. Para gestionar un control de versiones con la tecnología Git en tu ordenador y utilizar GitHub como plataforma de hosting remota primero instala GIT, después crea una cuenta en GitHub, clona el repositorio que desees, realiza cambios en este repositorio y guarda los cambios(commit y push).
</p>
<br>
<br>
<p>Ejercicio 5.A) 
En la clase impressora hay 4 atributos, $tinta y $paper son de tipo boolean y $tamany y $color son de tipo texto. 
Para que la funcion imprimeix responda 'Es pot imprimir en DINA4 en color negre. ' primeramente se ha de cumplir el IF y añadir ls variable $color al ECHO del IF. como he hecho abajo en el código.</p>

<p>Ejercicio 5.B) 
Si los atributos de la clase Impressora fueran PROTECTED en lugar de public, tendrían un alcance restringido y solo serían accesibles desde la propia clase y las clases derivadas (heredadas) de ella. Esto significa que no podrían ser accedidos directamente desde el código fuera de la clase.
Si los atributos de la clase Impressora fueran declarados como PRIVATE, tendrían un alcance aún más restringido que protected. Los atributos private solo serían accesibles desde la propia clase, pero no desde las clases derivadas ni desde el código fuera de la clase.  </p>

</body>

</html>