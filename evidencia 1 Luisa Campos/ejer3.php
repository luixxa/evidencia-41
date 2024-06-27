<?php
$signo = array("+" => "+", "-" => "-", "*" => "*", "/" => "/"); 
echo "Ingrese un número: ";
$a = readline();

echo "Ingrese un número: ";
$b = readline();

echo "Ingrese un operador: ";
$oper = readline();

if (($signo[$oper])) { 
    $resultado = eval("return $a {$signo[$oper]} $b;"); 
    echo "El resultado de la operación es $resultado";
} else {
    echo "Operación inválida";
}
?>