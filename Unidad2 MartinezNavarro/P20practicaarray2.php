<?php
/* CBTIS89
PROGRAMA QUE ALMACENA DIVERSOS DATOS EN UN 
ARREGLO Y POSTERIOR MENTE LOS IMPRIME POR
MEDIO DE UN CICLO FOR 
Oscar Said Martinez Navarro
3°A Programacion Matutino 
*/

$Nombre = "Oscar";
$array = array(1, 2, 3, "casa", $nombre);

//Se obtienen el numero de elementos 
$longitud = count($array);

//Recorre todos los elementos 
for($i=0; $i<$longitud; $i++)
	{//se obtiene el valor de cada elemento 

		echo $array[$i];
		echo "<br>";
	}
?>