<?php
session_start();

$logado = $_SESSION['email'];
if(!empty($_GET['id']))
{
    include_once("conexao.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM influenciadores WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM influenciadores WHERE id=$id";
        $resultDelete = $conn->query($sqlDelete);
    }

}
$logado = $_SESSION['email'] = 'admin@123';

header('Location: adm.php');



?>