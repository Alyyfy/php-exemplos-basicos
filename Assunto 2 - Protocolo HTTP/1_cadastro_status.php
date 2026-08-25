<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Status Codes</title>
</head>
<body>

    <h1>Cadstro de Aluno (com status Code)</h1>
    <form method = "post" action ="">
         <label for = "nome">Nome:</label>
         <input type = "text" name = "Nome" require><br><br>  
         
         <input for = "idade">Idade: require><br><br>

         <button type="sumbit">Enviar</button>
    </form>    

    <!-- Linha horizontal -->
    <hr>

    <?php
    // a tag $Server é uma variavel superglobal do PHP que tem acesso as requisições do servidor, 
    //aqui esse está confirmando se a requisição é via post

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            
            // Tratando erros e interagindo.

            // Erro: Não prencheu nome e idade.
            if ($nome == "" || $idade == ""){
            http_response_code(400);
            echo "<h2>Status 400 - Faltou nome ou idade</h2>";

            // Não digitou um número. Ex: Digitou "vinte" e número 20       
            } elseif (!is_numeric($idade)) {
                http_response_code(400);
                echo "<h2>Status 400 - Idade precisa ser um número </h2>";
            //
            } else {
                http_response_code(201);
                echo "<h2>Status 201 - Criado: $nome, $idade anos. </h2>";
            }
            
        } else {
        // Usuário ainda não enviou nada   
            http_response_code(200);
            echo "<p>Preencha o formulário acima e envie. </p>";
    }


    ?>

</body>
</html>