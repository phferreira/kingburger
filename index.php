<!DOCTYPE html>
<html lang="pt-br">

  <head >
    <title>King Burger</title>

    <meta charset="utf-8">
    <meta name="description" content="O melhor site de comida!">
    <meta name="viewport" content="width=device-width, initial-scale">
    
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
    <link rel="shortcut icon" href="images/logo.png">

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  </head>

  <body>

    <header>
      <nav>
        <a href="index.php" title ="Home">
          <img src="images/kingburger.png" alt="KinBurger" title="KinBurger">
        </a>
        <a href="#" id="menu">
          <i class="fas fa-bars"></i>
        </a>
        <ul>
          <li><a href="home" title="Home">Home</a></li>
          <li><a href="sobre" title="Sobre">Sobre</a></li>
          <li><a href="cardapio" title="Cardapio">Cardapio</a></li>
          <li><a href="contato" title="Contato">Contato</a></li>
        </ul>
      </nav>

      <div class="clear"></div>

      <div id="banner"> 
        <div class="msg">
          <h1> Mega Max Burger</h1>
          <p>4 Haburgeres de carne de boi, mais 500 gramas de bacon </p>
        </div>

        <img src="images/6.png" alt="Mega Max Burger" title="Mega Max Burger" class="max">
      </div>

    </header>

    <main>
      <?php
        //recuperar o parametro
        if (isset($_GET["param"])) {
           $pagina = $_GET["param"];
        }else{
          $pagina = "home";
        }
        //echo $pagina
        $pagina = "paginas/".$pagina.".php";
        //verificar se o arquivo existe
        if (file_exists($pagina)) {
          include $pagina;
        }else{
          include "paginas/erro.php";
        }
      ?>
    </main>

    <footer>
      
    </footer>

    <script type="text/javascript">
      $("menu").click(function(){
        $("nav ul").toggle();
      })
    </script>

  </body>

</html>
