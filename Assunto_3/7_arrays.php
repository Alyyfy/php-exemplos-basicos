<?php 


$produtos = [
    ["nome" => "camiseta", "preco" => 50.00, "quantidade" => 10],
    ["nome" => "calça jeans", "preco" => 100.00, "quantidade" => 5],
    ["nome" => "tênis", "preco" => 150.00, "quantidade" => 7], 
];

echo "<table border='1'>";
echo "<tr><th>nome</th><th>preço</th><th>quantidade</th></tr>";

foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . $produto["nome"] . "</td>";
    echo "<td> R$" . number_format($produto["preco"], 2, ',', '.') . "</td>";
    echo "<td>" . $produto["quantidade"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>