<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "noticias";

    $con = new mysqli($host, $user, $pass, $base);

    if ($con->connect_error) {
        die("Erro na conexão com o banco de dados: " . $con->connect_error);
    }

    if($nome == "israel" && $senha == "lucania"){

        echo "Bem vindo $nome";

        header("Location:edit.php");
        exit();
    }

    $check_username_query = "SELECT * FROM cadastro WHERE nome = '$nome'";
    $result = $con->query($check_username_query);

    if ($result->num_rows > 0) {
        // O nome de usuário já está em uso
        echo "O nome de usuário já está em uso. Escolha outro.";
    } else {
        $insert_user_query = "INSERT INTO cadastro (nome, senha) VALUES ('$nome', '$senha')";

        if ($con->query($insert_user_query) === TRUE) {
            echo "Cadastro realizado com sucesso.";

        } else {
            echo "Erro ao cadastrar o usuário: " . $con->error;
        }
    }
    $con->close();
}

    ?>
</body>
</html>