<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <form method="post" action="">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";
    
    $conn = new mysqli($servername, $username, $password);
    
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->query($sql);
    
    $conn->select_db($dbname);
    
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        usuario VARCHAR(100) NOT NULL,
        senha VARCHAR(100) NOT NULL
    )";
    $conn->query($sql);
    
    $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario','$senha')";
    if ($conn->query($sql) == TRUE) {
        echo "<p style='color: Darkgreen;'>Usuário cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color: red;'>Erro ao cadastrar</p>";
    }
    
    $conn->close();
}
    ?>
</body>
</html>
