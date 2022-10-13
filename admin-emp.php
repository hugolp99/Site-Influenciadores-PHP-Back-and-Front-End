<?php
    session_start();
    if((!isset($_SESSION['email']) == 'true'))
    {
        unset($_SESSION['email']);
        header("Location: index.php");
    }
    if((($_SESSION['email']) == 'admin@123'))
    {
        $logado = $_SESSION['email'];
    }
    else
    {
        unset($_SESSION['email']);
        header("Location: index.php");
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
        <style>
            body{
                background-color: #212529;
            }
        </style>
    </head>
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
                <a class="nav-link active" aria-current="page" href="adm.php">Tabela Influeciadores</a>
            </li>
            <li class="nav-item">
                
            </li>
            <li class="nav-item">
            
            </li>
            </ul>
            <form class="d-flex" role="search">
            <a class="btn btn-outline-success" href="index.php">Sair</a>
            </form>
        </div>
        </div>
    </nav>
    </header>
        <div class="container-listadm">
            <table class="table table-bordered table-dark">
            <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Senha</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        include_once('conexao.php');
                        $sql = "SELECT * FROM empresas ORDER BY id DESC";

                        $result = $conn->query($sql);
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['company']."</td>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>".$user_data['password']."</td>";
                            echo "<td>
                                <a class='btn btn-sm btn-secondary' href='edit-emp.php?id=$user_data[id]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16'><path fill-rule='evenodd' d='M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z'></path>
                                    </svg>
                                </a>
                                <a class='btn btn-sm btn-danger' href='delete-emp.php?id=$user_data[id]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16'><path fill-rule='evenodd' d='M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z'></path></svg>
                                </a>
                            </td>" ;
                            echo "</tr>";
                        }
                    ?>
            </tbody>
            </table>
        </div>