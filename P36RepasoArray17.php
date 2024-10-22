<?php 
/* CBTIS89
Programa que dise los numeros pares
Martinez Navarro Oscar Said 
3°A Matutino
*/

$cantidades = array(200,100,50,20,30);
$cantidades2 = array(100,50,20,10,150);
$Res=array();
$Res2=array();
$Res3=array();

for($i=0; $i<count($cantidades); $i++){
	

$Res[$i] = $cantidades2[$i] + $cantidades[$i];
$Res3[$i] = $Res[$i] * 0.05;
$Res2[$i] = $Res[$i] - $Res3[$i];
}

for($i=0; $i< count($Res2); $i++){
	
    echo $Res2[$i];
    echo "<br>";
 }
 echo "<br>";
?>