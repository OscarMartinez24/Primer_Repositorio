<?php 
/*CBTIS89
Programa que almacena datos en un 
y posteriomente los imprime 
Martinez Navarro Oscar Said 
3°A Programacion T.M.
*/

$equipo= array("25"=>"Manzan","40"
=>"Mango","35"=>"limon","20"=>"naranja");

echo "** FRUTERIA DEL ASILO **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{echo "El kilo de " . $jugador . "  cuesta ".$posicion;
echo "<br>","<br>";}
?>