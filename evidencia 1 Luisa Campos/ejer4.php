<?php 
$lado1 =intval(readline("lado 1:"));
$lado2 =intval(readline("lado 2:"));
$lado3 =intval(readline("lado 3:"));

if(($lado1 + $lado2 > $lado3));
    echo "triangulo valido ";
    if(($lado1 == $lado2)&&($lado2 == $lado3)):
        echo "equilatero";
    endif;
 if(($lado1 == $lado2)&&($lado2 !=$lado3)):
    echo "insoscelentes";
 endif;

 if(($lado1 != $lado2)&&($lado2 != $lado3)):
    echo "escaleno";

 endif;





?>