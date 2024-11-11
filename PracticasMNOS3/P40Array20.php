<?php 
/* CBTIS89
P40Array20.php
programa que almacena por medio de un ciclo 
los numeros del 150 al 200 de la siguiente manera:
en el arreglo1 van los numeros pares, en el arreglo2 van los numeros 
impares, en el arreglo3 va la suma de los numeros correspondientes 
al mismo indice. 
Martinez Navarro Oscar Said 
3°A Programacion T.M.
*/



$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();


for ($i=150; $i<201; $i++){
	$R = $i%2;
	if ($R==0){
		$Arreglo1[] = $i;
		$Arreglo2[] = $i + 1;
	}
}

for ($j=0; $j<count($Arreglo1); $j++){
	$Arreglo3[$j] = $Arreglo1[$j] +$Arreglo2[$j]; 
}
echo "Arreglo1  Arreglo2  Arreglo3". "<br>";
for ($l=0; $l<26; $l++){
echo "---". $Arreglo1[$l] ."--------". $Arreglo2[$l] ."---------". $Arreglo3[$l]. "<br>"; 
}
?>