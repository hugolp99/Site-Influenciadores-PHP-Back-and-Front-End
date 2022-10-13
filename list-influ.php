<?php
session_start();

if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['password']) == true))
{
	unset($_SESSION['email']);
    unset($_SESSION['password']);
	header('Location: login.php');
}
$logado = $_SESSION['email'];


include_once("conexao.php");
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os influenciadores da tabela
$result_influ = "SELECT * FROM influenciadores";
$resultado_influ = mysqli_query($conn, $result_influ);

//Contar o total de influenciadores
$total_influ = mysqli_num_rows($resultado_influ);

//Seta a quantidade de influenciadores por pagina
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar os influenciadores
$num_pagina = ceil($total_influ/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os influenciadores a serem apresentado na página
$result_influ = "SELECT * FROM influenciadores limit $incio, $quantidade_pg";
$resultado_influ = mysqli_query($conn, $result_influ);
$total_influ = mysqli_num_rows($resultado_influ);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Influenciadores</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootnav.css" rel="stylesheet">		
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
            <div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1 class="top">Influenciadores</h1>
			</div>
			<div class="row">
				<?php while($rows_influ = mysqli_fetch_assoc($resultado_influ)){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="list-group">
							<img class="img-thumbnail" src="assets/imagens/influ.jpg" alt="...">
							<div class="list-group">
								<a><h3><?php echo $rows_influ['name']; ?></h3></a>
								<p><a href="#" class="list-group-item">Instagram: <?php echo $rows_influ['userinsta']; ?></a> </p>
								<p><a href="#" class="list-group-item">Seguidores Instagram: <?php echo $rows_influ['followinsta']; ?></a> </p>
								<p><a href="#" class="list-group-item">WhatsApp: <?php echo $rows_influ['whats']; ?></a> </p>
								
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li type="button" class="btn btn-secondary">
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="list-influ.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li type="button" class="btn btn-secondary"><a class="pagtext" href="list-influ.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li type="button" class="btn btn-secondary">
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a class="pagtext" href="list-influ.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>   		
	</body>
</html>