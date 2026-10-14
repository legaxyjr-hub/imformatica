<?php

$a = 10;

for ($index = 2; $index != 10; $index = $index +2){

    //echo $index . "\n";

}

//second part

$flag = "Resta";
$a = 0;
while ( $flag != "Esci"){

$a = 0;
$a = $a+4;

$flag = "Esci";

}

if ( $a > $b ) {
$flag = "Resta";
echo "a è maggiore di b"."\n";
$a = $a/2;
}
else{
$flag = "Esci";
echo "a è minore di b"."\n";
}

echo $a;


?>
//creare 3 liste di numeri L1[1, 2, 3], L2 [4, 5, 6], L3[9, 8, 7]
//numero a numero (stessa posizione nella lista) sommare gli elmenti delle prime due liste L1, L2 e moltiplicare la somma per l'elemento in L3
//questa opperazione di moltilplicazione deve durare fino a che  la moltiplicazione è < 64;

// stampare di volta in volta il risultato della moltiplicazione
