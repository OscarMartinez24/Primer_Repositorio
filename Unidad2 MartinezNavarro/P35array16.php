<?php 
/* CBTIS89
Programa que dise los numeros pares
Martinez Navarro Oscar Said 
3°A Matutino
*/

$Arraysuma = array(10,20,30,40,50);
$Arraysuma2 = array(3,7,6,15,18);
$Res=array();
$Res2=array();
$Res3=array();
$Res4=array();
$longitud = count($Arraysuma);

 for($i=0; $i<$longitud; $i++){
$Res[$i] = $Arraysuma[$i] + $Arraysuma2[$i];
$Res2[$i] = $Arraysuma[$i] - $Arraysuma2[$i];
$Res3[$i] = $Arraysuma[$i] * $Arraysuma2[$i];
$Res4[$i] = $Arraysuma[$i] / $Arraysuma2[$i];
 }

 echo "SUMA ENTRE ARREGLOS <br>";
 for($i=0; $i<$longitud; $i++){
    echo $Arraysuma[$i]."  + ".$Arraysuma2[$i]."  = ".$Res[$i];
    echo "<br>";
 }
 echo "<br>";

echo "Resta ENTRE ARREGLOS <br>";
 for($i=0; $i<$longitud; $i++){
    echo $Arraysuma[$i]."  - ".$Arraysuma2[$i]."  = ".$Res2[$i];
    echo "<br>";
 }
 echo "<br>";

echo "SUMA Multiplicacion ARREGLOS <br>";
 for($i=0; $i<$longitud; $i++){
    echo $Arraysuma[$i]."  * ".$Arraysuma2[$i]."  = ".$Res3[$i];
    echo "<br>";
 }
 echo "<br>";

echo "Divicion ENTRE ARREGLOS <br>";
 for($i=0; $i<$longitud; $i++){
    echo $Arraysuma[$i]."  / ".$Arraysuma2[$i]."  = ".$Res4[$i];
    echo "<br>";
 }
 echo "<br>";

?>