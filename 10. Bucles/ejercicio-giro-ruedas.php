<?php

// if (condition1) {
//     # primera acción
// } 
// else if(condition2){
//     if (condition2.1) {
//         # primera acción de la segunda
//     } else if(condition2.2){
//         # segunda acción de la segunda 
//     }  else {
//         # Todo lo demás de las condiciones de condicion2
//     }
// } 
// else if(condition3){
//     # etc acción 3
// } 
// else {
//     # Todo lo demás
// }


$VelRizq=-13; //VELOCIDAD RUEDA IZQUIERDA
$VelRder=13; //VELOCIDAD RUEDA DERECHA
if ($VelRizq>=0 && $VelRder>=0) {
    if($VelRizq>$VelRder){
        echo "Estamos girando a la derecha";
    } 
    else if ($VelRizq<$VelRder){
        echo "Estamos girando a la izquierda";
    }
    else if ($VelRizq==0 && $VelRder==0) {
        echo 'Esta parado';
    } else {
        echo 'Corre hacia delante';
    }
}
else if ($VelRizq<0 && $VelRder<0) {
    if($VelRizq>$VelRder){
        echo "Estamos girando a la izquierda hacia atrás";
    } 
    else if ($VelRizq<$VelRder){
        echo "Estamos girando a la derecha hacia atrás";
    } else {
        echo 'Corre hacia atrás';
    }
}  
else {
    echo 'Gira sobre si mismo';
}

?>