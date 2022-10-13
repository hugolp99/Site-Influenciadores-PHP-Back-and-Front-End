<?php
session_start();
include_once("conexao.php");

$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


if($company == NULL || $email == NULL || $password == NULL)
{
    $_SESSION['msg'] = "<p style='color:red;'>Favor preencher todos dos campos para cadastro</p>";
    header("Location: cadastro-emp.php");
}
else
{
    $sql = "INSERT INTO empresas (company, email, password, created) VALUES ('$company', '$email', '$password', NOW())";
    $result_company= mysqli_query($conn , $sql);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "Usuário cadastrado com sucesso";
        header("Location: login.php");
    }else{
        $_SESSION['msg'] = "Erro ao cadastrar usuário";
        header("Location: cadastro-emp.php");
    }
}