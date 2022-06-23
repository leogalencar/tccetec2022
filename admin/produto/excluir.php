<?php
$id = filter_input(INPUT_GET, 'id');

include_once '../class/Produto.php';
$prod = new Produto();

$prod->setId($id);
?>
<div class="alert alert-danger" role="alert">
    <?= $prod->excluir() ?>
</div>
<meta http-equiv="refresh" content="1;URL=?p=produto/consultar">
