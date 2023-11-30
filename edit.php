<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Notícias</title>
    <link rel="stylesheet" href="css/style.css">
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
            <form action="verifedit.php" method="post" class="login-container" >
                <h2>Escreva a sua notícia</h2>
                <div class="input-group">
                    <label for="noticia">Texto</label>
                    <input type="text" id="texto" name="texto" required placeholder="Digite seu texto:">
                </div>
                <div class="input-group">
                    <label for="imagem">Imagem</label>
                    <input type="file" id="imagem" name="imagem" required placeholder="carregue sua imagem">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    
     
</body>
</html>