<?php 
/*CBTIS89
Programa que almacena datos en un 
y posteriomente los imprime 
Martinez Navarro Oscar Said 
3°A Programacion T.M.
*/

$equipo= array("Programacion"=>"Juan","ARH"
=>"Gabo","Arquitectura"=>"Dylan","Mecatronica"=>"Hanna");

echo "** REGISTRO DE ALUMNOS **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{echo "El alumno " . $jugador . "  Esta en la 89 y estudia  ".$posicion;
echo "<br>","<br>";}
?>