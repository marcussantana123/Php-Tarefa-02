<?php

    session_start();

if(!isset($_SESSION['nomeProdutos'])){
    $home ="http://localhost/Php/Php-Tarefa-01/index.php";
    header('Location:'.$home);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $produtos = $_POST["produto"];
    $_SESSION['nomeProdutos'] [] = $produtos;

}

$home ="http://localhost/Php/Php-Tarefa-01/index.php";
header('Location:'.$home);

?>