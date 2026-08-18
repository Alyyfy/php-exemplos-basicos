<?php

// Criação das variáveis 
$preco = 5;
$quantidade = 16;

// Somando
$total = $preco * $quantidade;

if ($total >= 200) {
    $desconto = $total * 0.10;
    $valorFinal = $total - $desconto;
} else {
    $valorFinal = $total;
}

//Exibindo resultado
echo "Valor total é: R$ $total \n" ;
echo "Valor final da compra é: R$ $valorFinal"

?>