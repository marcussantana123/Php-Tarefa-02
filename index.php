<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Site PHP</title>
</head>
<body>



<div class="m-5 p-4">

<?php 
session_start();
include"navBar.php";?>

<div class = "d-flex row gap-3">

<?php 

if(!isset($_SESSION['nomeProdutos'])){
  $_SESSION['nomeProdutos'] = array("Arroz","Carne","Feijão","Leite");
}
?>


<?php
foreach($_SESSION['nomeProdutos'] as $produtos){?>
    <div class="card">
  <div class="card-body">
  <?php echo "Produto: " . $produtos; ?>
  </div>
</div>
<?php } ?>

</div>


<?php

if(isset($_POST['submit'])) 
{ 
  array_push($nomeProdutos, $_POST['produto']); 
}

?>


<section class = "produtos">

<h2 class="p-3">Cadastre Seus Produtos</h2>
<form class="row g-3" action= "cadastrar.php" method="post">
  <div class="col-auto">
    <label for="NomeProduto" class="visually-hidden">Nome do Produto:</label>
    <input type="text" class="form-control" id="produto" name="produto" placeholder="Banana">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
  </div>
</form>
</div>

</section>

<?php include "Rodape.html";?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>