<?php include("cabecalho.php") ?>

<?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
?>
<p class="alert-success">
Produto: <?= $nome; ?>, R$<?= $preco ?> adicionado com sucesso!
</p>

<?php include("rodape.php") ?>