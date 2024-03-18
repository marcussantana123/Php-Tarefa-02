<?php

    session_start();

if(!isset($_SESSION['nomeProdutos'])){

    $home ="http://localhost/Php-Tarefa-01-main/index.php";
    header('Location:'.$home);  
}

$nomesite = "Lista de Produtos";
$descricaosite = "Página para Listagem de Produtos";

?>