<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "noticias";

$con = new mysqli($host, $user, $pass, $base);

if ($con->connect_error) {
    die("Erro na conexão com o banco de dados: " . $con->connect_error);
}

$result = $con->query("SELECT texto, imagem FROM noticia");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Home | Riot Games</title>
    <link rel="stylesheet" href="css/style.css">

<!-- Anton -->
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Libre+Baskerville&display=swap" rel="stylesheet">

<!-- ícones -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<!-- Menu hambúrguer -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript -->
<script src="js/javinha.js"></script>

<!-- Ícone site -->
<link rel="icon" href="img/icons8-riot-games-350-1.jpeg">
</head>
<body>
    <div class="menu">
        <div class="hamburguer-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="menu-list">
            <a href="index.html">Home</a>
            <a href="vava.html" target="_blank">Valorant</a>
            <a href="wr.html" target="_blank">Wild Rift</a>
            <a href="cadastro.php" target="_blank"><button class="Cadastro">Cadastro</button></a>
        </div>
    </div>

    <br><br><br><br>

    <div class="titulo">
       <h1>Valorant | Wild Rift</h1> 
    </div>

    <div class="imagens">
        <img src="img/Valorant_Launch_KV_424_designpass_F.jpg">
        <img src="img/wild-rift-registro.jpeg">
    </div>
 
    <br>

    <div class="nov">
    <h1>Novidades</h1>
    </div>

    <?php
while ($row = $result->fetch_assoc()) {
    echo "
    <div class='noticias'>
      <div class='imagensnot1'>
        <img src='img/{$row['imagem']}' class='nots'>
      </div>
      <div class='texto'>
        <p>{$row['texto']}</p>
      </div>
    </div>";
}
?>

<img src="img/" alt="">
    <div class="comp">
        <pre>Compartilhe:  </pre>
        
        <div  class ="icones" >
            <a  href ="https://www.instagram.com/" class =" icon icon--instagram" target="_blank">
              <i  class =" ri-instagram-line " > </i>
            </a>
            <a  href ="https://twitter.com/" class ="icon icon--twitter" target="_blank">
              <i  class =" ri-twitter-line " > </i>
            </a>
            <a  href ="https://www.linkedin.com/" class ="icon icon--linkedin" target="_blank">
              <i  class =" ri-linkedin-line " > </i>
            </a>
            <a  href ="https://github.com/" class ="icon icon--github" target="_blank">
              <i  class =" ri-github-line " > </i>
            </a> 
          </div>
    </div>

<footer>

    <br>

<div class="rodape">
    <div  class ="icones" >
        <a  href ="https://www.instagram.com/" class =" icon icon--instagram" target="_blank">
          <i  class =" ri-instagram-line " > </i>
        </a>
        <a  href ="https://twitter.com/" class ="icon icon--twitter" target="_blank">
          <i  class =" ri-twitter-line " > </i>
        </a>
        <a  href ="https://www.linkedin.com/" class ="icon icon--linkedin" target="_blank">
          <i  class =" ri-linkedin-line " > </i>
        </a>
        <a  href ="https://github.com/" class ="icon icon--github" target="_blank">
          <i  class =" ri-github-line " > </i>
        </a> 
      </div>

      <br>

      <img src="img/Riot-Games-logo-1ydm0q89bxxjpf4zkl0oc4zpvtd1v3ln03w0zunbe7fo.jpeg" class="logo">
    </div>
    
    <div>
        <p class="direitos">&copy;2019-2023 Riot Games, Inc. RIOT GAMES, LEAGUE OF LEGENDS: WILD RIFT e todos os logotipos associados são marcas comerciais, marcas de serviço e/ou marcas registradas da Riot Games, Inc.</p>
    </div>
</footer>
</body>
</html>