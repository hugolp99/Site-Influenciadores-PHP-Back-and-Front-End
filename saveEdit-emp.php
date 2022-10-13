<?php
    session_start();

    $logado = $_SESSION['email'];
    include_once('conexao.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sqlUpdate = "UPDATE empresas SET company='$company', email='$email', password='$password' WHERE id='$id'";

        $result = $conn->query($sqlUpdate);
    }
    $logado = $_SESSION['email'] = 'admin@123';
    header('Location: admin-emp.php')
?>