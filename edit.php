<?php

if(!empty($_GET['id']))
{
    include_once("conexao.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM influenciadores WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $name = $user_data['name'];
            $email = $user_data['email'];
            $password = $user_data['password'];
            $whats = $user_data['whats'];
            $userinsta = $user_data['userinsta'];
            $followinsta = $user_data['followinsta'];
        }
    }
    else
    {
        header('Location: adm.php');
    }

}




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
                                
                            </li>
                            <li class="nav-item">
                            
                            </li>
                            </ul>
                            <form class="d-flex" role="search">
                            <a class="btn btn-outline-success" href="adm.php">Voltar</a>
                            </form>
                        </div>
                        </div>
                    </nav>
                    </header>
                    <form class="login100-form validate-form" method="POST" action="saveEdit.php">
                        <span class="login100-form-title p-b-26">
                            Editar Influenciador
                        </span>
                            <div class="wrap-input100 validate-input">    
                                <input class="input100" type="text" name="name" value=<?php echo $name ?>>
                            </div> 
                            
                            <div class="wrap-input100 validate-input"> 
                                <input class="input100" type="e-mail" name="password" value=<?php echo $password ?>>
                            </div>
                            
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="email" value=<?php echo $email ?>>
                            </div>

                            <div class="wrap-input100 validate-input">     
                                <input class="input100" type="text" name="whats" value=<?php echo $whats ?>>
                            </div>

                            <div class="wrap-input100 validate-input">    
                                <input class="input100" type="text" name="userinsta" value=<?php echo $userinsta ?>>
                            </div>

                            <div class="wrap-input100 validate-input">    
                                <input class="input100" type="text" name="followinsta" value=<?php echo $followinsta ?>>
                            </div>
                            
                            <div class="container-login100-form-btn">
						        <div class="wrap-login100-form-btn">
							        <div class="login100-form-bgbtn"></div>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
							        <input class="login100-form-btn" type="submit" name="update" id="update">
						        </div>
					        </div>
					        </div>
                    </form>
                </div>    
            </div>        
        </div>
    </body>
</html>