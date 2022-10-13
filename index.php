<?php
  session_start();
  unset($_SESSION['email']);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Hugo Leonardo Poltronieri">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Start Influp</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootnav.css" rel="stylesheet">



    
    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Start Influp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro-inf.php">Cadastro Influenciador</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="cadastro-emp.php">Cadastro Empresa</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a class="btn btn-outline-success" href="login.php">Login</a>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/imagens/bannerhome.png" width=100%>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Ei Influenciador!</h1>
            <p>Receba mais propostas de Jobs e se torne cada vez mais profissional!</p>
            <p><a class="btn btn-lg btn-primary" href="cadastro-inf.php">Cadastre agora!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/imagens/bannerhome2.png" width=100%>

        <div class="container">
          <div class="carousel-caption">
            <h1>Encontre seu influenciador ideal!</h1>
            <p>Marcas e empresas que desejam encontrar os melhores influenciadores é aqui!</p>
            <p><a class="btn btn-lg btn-primary" href="#">Cadastre Agora!</a></p>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="fw-normal">Influenciador 1</h2>
        <p>Sobre o influenciador 1</p>
        <p><a class="btn btn-secondary" href="#">Ver Detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="fw-normal">Influenciador 2</h2>
        <p>Sobre o influenciador 2</p>
        <p><a class="btn btn-secondary" href="#">Ver Detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="fw-normal">Influenciador 3</h2>
        <p>Sobre o influenciador 3</p>
        <p><a class="btn btn-secondary" href="#">Ver Detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Receba mais destaque pelo seu trabalho!</h2>
        <p class="lead">A Start Influp tem ajudado mais de 1000 influenciadores de todo o Brasil!</p>
      </div>
      <div class="col-md-5">
        <img src="assets/imagens/influ.png" width=100%>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">A cara da sua marca!</h2>
        <p class="lead">Aqui na Start Influp você econtra a melhor parceria para seu negócio!</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="assets/imagens/parceria.png" width=100%>

      </div>
    </div>



    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Voltar ao Topo</a></p>
    <p>&copy; 2022 Start Influp Todos os direitos reservados &middot;
  </footer>
</main>


    <script src="assets/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
