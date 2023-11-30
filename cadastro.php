<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Cadastro | Riot Games</title>
    <link rel="stylesheet" href="css/login.css">
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
            <a href="index.html" target="_blank">Home</a>
            <a href="vava.html" target="_blank">Valorant</a>
            <a href="wr.html" target="_blank">Wild Rift</a>
        </div>
    </div>
    
    <br><br><br><br>

        <div class="page-container">
            <form action="verifcad.php" method="post" class="login-container" >
                <h2>Cadastro</h2>
                <div class="input-group">
                    <label for="username">Usuário</label>
                    <input type="text" id="nome" name="nome" required placeholder="Digite seu usuário:">
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" id="senha" name="senha" required placeholder="Digite sua senha:">
                </div>
                <button type="submit">Cadastrar-me</button>
            </form>
        </div>
    
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