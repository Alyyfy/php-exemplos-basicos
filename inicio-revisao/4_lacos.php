<?php

// Laço (FOR) para a Tabuada 8
echo "=== Tabuada ===";
echo "\n\n";

for ($i = 1; $i <= 10; $i++) {
    echo "8 x $i =" . (8 * $i) ."\n";
}

//while - (Enquanto) Contagem regressiva
echo "\n";
$n = 5;
while ($n >0) {
    echo $n ."\n";
    $n--;
 }

 //Do While - (Faça enquanto) Executa ao menos 1 vez
 echo "\n";
 $x = 0;
do {
    echo "x vale: $x \n";
    $x++;
} while ($x < 10);