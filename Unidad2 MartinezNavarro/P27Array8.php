<?php
/* CBTIS89
Programa que dise los numeros pares
Martinez Navarro Oscar Said 
3°A Matutino
*/

$numeros = array();
for($i =1;$i<=100;$i++){
$numeros[]=$i;
}

foreach ($numeros as $valor)
{if ($valor % 2 ==0)
   {
echo $valor ." ";
}
}
?>