<?php 
/* CBTIS89
Programa que dise los numeros pares
Martinez Navarro Oscar Said 
3°A Matutino
*/
// Almacena datos en un arreglo
$arraynombres=["Josue", "Campos", "Orozco"];


//Convierte un array en una cadena de texto 
$string = implode("", $arraynombres);
echo "Cadena de texto <br>";
echo $string;
echo "<br>", "<br>";

// Cadena de texto a separar 
$cadena = "tercero de programacion matutino ";

// Convierte una cadena de texto en array 
$array = explode(" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//Imprime los elementos del arreglo 
for ($i=0; $i<$longitud; $i++)
{//Se obtine el valor de cada elemento 
	echo $array [$i];
    echo "<br>";
}
?>