<?php 
/*CBTIS89
Programa que halmacena datos de manera Hacendente, desendente, por colubnas, y columnas desendesntes 
Martinez Navarro Oscar Said 
3°A Matutino
*/

$datos = array(array(10,20,30),array(40,50,60),array(70,80,90));

echo "Normal";
echo "<br>";
for($i=0;$i<3;$i++){
	for ($j=0;$j<3;$j++){
		echo $datos[$i][$j]. " ";
	}
	echo "<br>";
}

echo "columnas";
echo "<br>";
for ($j = 0; $j < 3; $j++) { 
    for ($i = 0; $i < 3; $i++) { 
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}


echo "columnas inversas:";
echo "<br>";
for ($j = 2; $j >= 0; $j--) { 
    for ($i = 0; $i < 3; $i++) { 
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}


echo "filas inversas:";
echo "<br>";
for ($i = 2; $i >= 0; $i--) { 
    for ($j = 0; $j < 3; $j++) { 
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}

echo "Fila Espejo";
echo "<br>";
for ($i=2;$i>=0;$i--){
    for ($j=2;$j>=0;$j--){
echo $datos [$i][$j]. " ";
    }
    echo "<br>";
}

?>

