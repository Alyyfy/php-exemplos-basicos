<?php

// Criando variáveis
$idade = 19;
$temDocumento =false;

//Estrutura de decisão (Operador)
if ($idade >= 18 && $temDocumento) {
    echo "Pode tirar a carteira";
} else {
    echo "Não pode tirar a carteira";
}

//Estrutura de decisão (Operador OU)
if ($idade >= 18 || $temDocumento) {
    echo"\nPode tirar a carteira!";
} else {
    echo "Não pode tirar a carteira";
}

// Operador negação
$presente = false;

if (!$presente) {
    echo "\nO aluno esta presente";
} else {
    echo "\nO aluno está ausente";
}