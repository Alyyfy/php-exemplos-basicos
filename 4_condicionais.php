<?php
// Verifica se o formulário foi enviado
if ($_SERVER["RESQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];
}

// Verifica se senha bate
if ($senha == "12345") {
    header("Location: 4b_bem_vindo.php");
} else {
    // Mensagem de erro
    $erro = "Senha incorreta. Tente novamente";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página de login</title>
</head>
<body>
    <h2>Digite sua senha:</h2>
    <form action="">method<
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <button type="submit">Entrar</button>
    </form>
    
    <?php
    if (isset($erro)) {
        echo "<p style = 'color: red';>$erro</p";
    }
    ?>
</body>
</html>