<?php 
/* CBTIS89
Programa que dise los numeros pares
Martinez Navarro Oscar Said 
3°A Matutino
*/

$Nombre=array("Juan","Andrea","Dante","Brandon","Oscar","Gael");
sort($Nombre);
echo "arreglo original";
for ($i = 0; $i< count($Nombre); $i++){
	echo $Nombre[$i] . "<br>";
}

array_push($Nombre, "Roberto","Samuel","Hector","Gabriel");

array_splice($Nombre, 1,2);

rsort($Nombre);
echo "Arreglo ordenado de forma desendente ";
for ($i = 0; $i<count($Nombre); $i++){
	echo $Nombre[$i] . "<br>";
}

echo "el numero de elementos son " . count($Nombre);

?>