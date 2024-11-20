<?php 
/* CBTIS89
Programa que almacena el nombre de cuatro articulos 
en arreglo llamado $Productos y en otro arreglo 
multidimencional llamado $Precios almacena los precios 
correspondientes de 3 meses esto se hace por medio de 
columnas y filas 
Programacion 3°A T.M.
Oscar Said Martinez Navarro 
*/

$Productos = array("Vestido","Pantalon","Cinturon","Camiseta");
$Precios = array(array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
$Subtotal = array();
$Promedio = array();
$Suma = 0;


for ($i=0;$i<4;$i++){
	for ($j=0;$j<4;$j++){
		$Suma = $Suma +  $Precios[$i][$j];



}
$Subtotal[$i] = $Suma;
}


echo "TIENDA DE ROPA";
echo "<br>";
echo "Productos","Subtotal","Promedio";
echo "<br>";

for ($l=0;$l<5;$l++){
	echo $Productos[$l] . " " . $Subtotal[$l];
	echo "<br>";

}

echo "PRECIOS";
echo "<br>";

for ($h=0;$h<4;$h++){
	for ($k=0;$k<4;$k++){
	echo $Precios[$h][$k];
}
}