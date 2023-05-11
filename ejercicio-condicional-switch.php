<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$dia = Date("N");

switch($dia){
	case '1':
		echo "Feliz Lunes!";
	break;

	case '2':
		echo "Feliz Martes!";
	break;
    case '3':
		echo "Feliz Miércoles!";
	break;
    case '4':
		echo "Feliz Jueves!";
	break;
    case '5':
		echo "Feliz Viernes!";
	break;
    case '6':
		echo "Feliz Sabado!";
	break;

	default:
		echo "Feliz domingo";
	break;
}

# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz AÃ±o Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>