<?php

// Exemplos de função em PHP (uma função sempre tem retorno)
function somar(float $a, float $b): float {
    return $a + $b;
}

// Chamado a função
echo somar(4.5,9.3);
echo "\n";

// Exemplo de procedimento (Não tem return,pois não calcula)
function saudacao($nome = "Aluno") {
    echo "Olá, $nome! Seja Bem-vinda(o)!!";
}

// Usando/exibindo (Procedimento)
saudacao("Maria Smart");
echo "\n";
saudacao();
