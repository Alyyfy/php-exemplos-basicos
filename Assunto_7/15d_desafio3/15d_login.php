<?php
session_start();

$erro = "";
// cor de fundo da página branco por default
$cor = "white";

// Verifica se foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $cor = $_POST['cor'];

    // Conecta ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // verifica o bglh
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta
    $sql = "SELECT * FROM usuarios
                WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);

    // Verifica se encontrou o usuário
    if ($result->num_rows > 0) {
        // Salva usuário e cor na sessão
        $_SESSION['usuario'] = $usuario;
        $_SESSION['cor'] = $cor;

        header("Location: 15d_perfil.php");
        exit();
    } else {
        echo "Usuário ou senha incorretos!";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body style="background-color:<?php echo htmlspecialchars($cor); ?>;">
    <form method="post" action="#">
        <label for="usuario">Usuário:</label><br>
        <input type="text" name="usuario" id="usuario" required><br>

        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" required><br>

        <label for="cor">Cor de fundo:</label><br>
        <select id="cor" name="cor">
            <option value="#ffffff">Branco</option>
            <option value="rgb(244, 49, 49)">Vermelho</option>
            <option value="rgb(77, 77, 247)">Azul</option>
            <option value="rgb(238, 238, 75)">Amarelo</option>
            <option value="rgb(181, 75, 238)">Roxo</option>
        </select><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>

</html>