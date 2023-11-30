<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];
    $imagem = $_POST['imagem'];

    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "noticias";

    $con = new mysqli($host, $user, $pass, $base);

    if ($con->connect_error) {
        die("Erro na conexão com o banco de dados: " . $con->connect_error);
    }

     else {
        $insert_not_query = "INSERT INTO noticia (texto, imagem) VALUES ('$texto', '$imagem')";

        if ($con->query($insert_not_query) === TRUE) {
            echo "Notícia enviada com sucesso!";
        }

        else{
            echo"A Notícia não foi enviada" . $con->error;
        }
    }
    $con->close();
}