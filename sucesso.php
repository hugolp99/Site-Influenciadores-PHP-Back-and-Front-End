<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Start Influp</title>
        <link rel="stylesheet" type="text/css" href="assets/csscad/util.css">
	    <link rel="stylesheet" type="text/css" href="assets/csscad/main.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootnav.css" rel="stylesheet">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
			    <div class="wrap-login100">
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
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-26">
                            Parabéns pelo cadastro!
                        </span>
                            
                            <div class="wrap-input100 validate-input">
                                <p class="text-center">Seu perfil agora será analisado e em breve receberá propostas para Jobs de todo o Brasil!<p>
                            </div>
                            
                            
                    </form>
                </div>    
            </div>        
        </div>
    </body>
</html>