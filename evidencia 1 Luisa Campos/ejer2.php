<?php 
echo "ingrese un numero";
$numero = readline();

if($numero>0){
    echo"el numero $numero es positivo.";
} elseif ($numero >0){
    echo "el numero $numero es negativo. ";
}else{
    echo "el numero es cero.";
}
if($numero %2 ==0) {
    echo "el numero $numero es par. ";
}else{
    echo "el numero $numero es impar. ";
}