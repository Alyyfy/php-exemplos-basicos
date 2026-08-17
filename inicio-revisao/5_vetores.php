<?php

// Vetores (array simples)
$frutas = ["Maçã","Banana","Uva"];

// Exibindo (Usando laço)
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta\n";
}

// Matriz (array completo "Linhas e colunas")
$matriz = [
    ["Max Verstappen","Lendo Norris","Oscar paistel"],
    ["Charles Leclerec","Lewis Hamilton","Geoger Russel"],
    ["Fernando Alonso", "Carlos Sainz", "Ayrton Senna"]
];

// Exibindo nome dos pilotos
echo "\n";
echo "Melhores pilotos da F1: \n";
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
    }
    echo "\n";
}