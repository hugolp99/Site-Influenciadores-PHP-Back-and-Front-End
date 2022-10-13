<?php
    session_start();

    $logado = $_SESSION['email'];
    include_once('conexao.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $whats = $_POST['whats'];
        $userinsta = $_POST['userinsta'];
        $followinsta = $_POST['followinsta'];

        $sqlUpdate = "UPDATE influenciadores SET name='$name', email='$email', password='$password', whats='$whats', userinsta='$userinsta', followinsta='$followinsta'WHERE id='$id'";

        $result = $conn->query($sqlUpdate);
    }
    $logado = $_SESSION['email'] = 'admin@123';
    header('Location: adm.php')
?>