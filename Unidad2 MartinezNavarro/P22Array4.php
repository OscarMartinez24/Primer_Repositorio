<?php 
/*CBTIS89
Programa que almacena datos en un 
y posteriomente los imprime 
Martinez Navarro Oscar Said 
3°A Programacion T.M.
*/

$equipo= array("portero"=>"julio","defensa"
=>"Diego","medio"=>"Jair","delantero"=>"Rafa");

echo "** SELECCION NACIONAL **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{echo "El jugador " . $jugador . "es el ".$posicion;
echo "<br>","<br>";}
?>