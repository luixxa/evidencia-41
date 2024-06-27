<?php 
echo"INGRESE EL DIA, MES Y AÑO\n";

$dd= readline();

$mm = readline();

$yyy = readline();

echo"SU FECHA ES\n";

echo  "\n" . ($yyy);

echo  "\n" . ($mm);

echo "\n" . ($dd);

if($mm == 02 && $dd == 30):
echo"\nFecha no valida\n";
endif;

if($mm == 04 && $dd == 31):
 echo"\nFecha no valida\n";
endif;







?>