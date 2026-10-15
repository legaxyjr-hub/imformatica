<?php

$animali = ["gazella", "rana", "gallo"];

$a = 2;
$animale = $animali[$i];

if($a == 0) echo "la gazella è un quadrupede";
if($a == 1) echo "la rana come fa";
if ($a == 2) echo "il gallo è un uccello";

switch($a){
    case 0 : echo "la gazella è un quadrupede";break
    case 1 : echo "la rana come fa";break
    case 2 : echo "il gallo è un uccello";break
    default :  echo "non ho quell animale";
}

?>

<?php
//eq1 : 2x +1 = 0
//eq2 : x +3 = 0
//eq3 : x + 3/2 = 0

//fare un sistema che preso un indice $i -> (1, 2, 3), selezioni la equazione 1, 2 o 3 e restituire la soluzione x
// usare la sintassi switch

$i = 0;

switch($i){
  case 0 : echo -1/2;
  case 1 : echo -3;
  case 0 : echo -3/2;  
}