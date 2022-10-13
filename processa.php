<?php
session_start();
include_once("conexao.php");

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$whats = filter_input(INPUT_POST, 'whats', FILTER_SANITIZE_STRING);
$userinsta = filter_input(INPUT_POST, 'userinsta', FILTER_SANITIZE_STRING);
$followinsta = filter_input(INPUT_POST, 'followinsta', FILTER_SANITIZE_STRING);

if($name == NULL || $email == NULL || $password == NULL || $whats == NULL || $userinsta == NULL || $followinsta == NULL)
{
    $_SESSION['msg'] = "<p style='color:red;'>Favor preencher todos dos campos para cadastro</p>";
    header("Location: cadastro-inf.php");
}
else
{
    $sql = "INSERT INTO influenciadores (name, email, password, whats, userinsta, followinsta, created) VALUES ('$name', '$email', '$password', '$whats', '$userinsta', '$followinsta', NOW())";
    $result_influencer= mysqli_query($conn , $sql);

    if(mysqli_insert_id($conn)){
        header("Location: sucesso.php");
    }else{
        $_SESSION['msg'] = "Erro ao cadastrar usuário";
        header("Location: cadastro-inf.php");
    }

}