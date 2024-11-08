<?php
/*CBTIS89
Martinez Navarro Oscar Said 

Programacion T.M. 3°A
*/


$Nombre = array("pato", "said", "gabo", "Mario", "Mari", "Cheli", "Sofi");
$Edad = array(16, 29, 46, 35, 28, 56, 17);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();

echo "NOMBRES ". "  ". " EDADES ". "  ". "Grupo 1". "  ". "Grupo 2". "  ". "Grupo 3";
echo "<br>";

for ($i = 0; $i< 7; $i++) {
    
    


    if ($Edad[$i] < 18) {
        $Grupo1[$i] = 1;
        $Grupo2[$i] = 0;
        $Grupo3[$i] = 0;
    } else if ($Edad[$i] >= 19 && $Edad[$i] <= 35) {
        $Grupo2[$i] = 1;
         $Grupo3[$i] = 0;
         $Grupo1[$i]=0; 
    } else if ($Edad[$i] >= 36 && $Edad[$i] <= 80) {
        $Grupo3[$i] = 1;
        $Grupo1[$i]=0; 
        $Grupo2[$i] = 0;
    } 

}

 for ($j=0;$j<7;$j++){
   	echo $Nombre[$j] . "--------------" . $Edad[$j] . "  ";
	 echo "---------" . $Grupo1[$j] . "---------" . $Grupo2[$j] . "---------" . $Grupo3[$j] . "<br>";
}

?>
