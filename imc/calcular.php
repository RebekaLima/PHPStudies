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

<div class="mx-auto p-2 bg-secondary-subtle rounded-start" style="width: 400px;">
<button tupe="button" class="btn btn-danger mb-2">O seu IMC é: <?php echo $usuario->exibirImc()?></button>
<button type="button" class="btn btn-outline-danger mb-2">Seu IMC está na categoria:  <?php echo $usuario->valorImc() ?></button>
</div>
<?php
include "rodape.php";
?>