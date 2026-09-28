<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de Acesso</title>
</head>
<body>

<form method="post">

    <p><label><strong>Nome:</strong></label>
    <input type="text" name="nome" required></p>

    <label> <strong>Ano de Nascimento:</strong></label>
    <input placeholder="AAAA" type="number" name="ano" required>

    <br><br>

    <button type="submit">Verificar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $ano = $_POST["ano"];

    $idade = 2026 - $ano;

    if ($idade >= 18) {

        echo "<h2>Acesso permitido, $nome! Idade atual: $idade anos</h2>";

        $arquivo = fopen("log_acessos.txt", "a");

        $linha = $nome . " - " . $idade . " anos\n";

        fwrite($arquivo, $linha);

        fclose($arquivo);

    } else {

        echo "<h2>Acesso negado, $nome! Idade atual: $idade anos</h2>";

    }
}

?>

</body>
</html>