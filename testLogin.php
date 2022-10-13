<?php
session_start();


    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        //Permitiu acessar
        include_once('conexao.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM influenciadores WHERE email = '$email' and password = '$password'";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            if($email == 'admin@123' && $password == 'admin')
            {
                //Acesso ADM
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('Location: adm.php');
            }
            else
            {
                //Verificando BD empresas
                include_once('conexao.php');
                $email = $_POST['email'];
                $password = $_POST['password'];
        
                $sql = "SELECT * FROM empresas WHERE email = '$email' and password = '$password'";
        
                $result = $conn->query($sql);

                if(mysqli_num_rows($result) < 1)
                {
                    //Não permitiu acessar
                    unset($_SESSION['email']);
                    unset($_SESSION['password']);
                    $_SESSION['msg'] = "<p style='color:red;'>Usuário ou senha incorretos</p>";
                }
                else
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    //Acesso Empresas
                    header('Location: list-influ.php');
                }
            }
        }
        else
        {
            header('Location: sucesso.php');
        }
    }
    else
    {
        //Não permitiu acessar
        header('Location: login.php');
        $_SESSION['msg'] = "<p style='color:red;'>Usuário ou senha incorretos</p>";
    }
?>