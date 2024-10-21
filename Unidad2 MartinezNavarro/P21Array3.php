<?php 
/*CBTIS89
Programa que almacena diversos datos en un arreglo
y posteriormente los imprime por medio de un ciclo
for
Martinez Navarro Oscar Said 
3°A Programacion T.M.
*/
$arraynombres = array("Karina","Marco","Rocio","Roberto","Fer","Juan");

//Se obtiene el Numero de elementos 
$longitud = count($arraynombres);

//Recorre todos los elementos
for($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemento 
echo $arraynombres[$i];
echo "<br>";
}
?>