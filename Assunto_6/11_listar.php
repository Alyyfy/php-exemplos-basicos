<?php

// Conexão ao banco de dados
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "exercicio";

// Conectando de fato ao banco
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão e possíveis erros
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta ao banco de dados
$sql = "SELECT id, name, email FROM clientes";
$result = $conn->query($sql);

// Exibe os registros existentes em formato de tabela
if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th></tr>";

    // Exibe cada registro da tabela
    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "Nenhum cliente encontrado!";
}

// Fecha a conexão
$conn->close();

?>