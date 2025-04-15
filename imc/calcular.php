<?php

require_once "Usuario.php";

$usuario = new Usuario();
$usuario->nome = $_POST['nome'];
$usuario->idade = $_POST['idade'];
$usuario->peso = $_POST['peso'];
$usuario->altura = $_POST['altura'];
$usuario->calculoImc();

include "cabecalho.php";
?>

<button tupe="button" class="btn btn-danger">O seu IMC é: <?php echo $usuario->exibirImc()?></button>
<button type="button" class="btn btn-outline-danger">Seu IMC está na categoria:  <?php echo $usuario->valorImc() ?></button>

<?php
include "rodape.php";
?>