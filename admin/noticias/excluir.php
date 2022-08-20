<?php
include_once '../class/Noticia.php';

$id = filter_input(INPUT_GET, 'id');
$noticia = new Noticia();
$noticia->setId($id);
$dados = $noticia->consultarPorID();

foreach ($dados as $mostrar) {
    $titulo = $mostrar['titulo'];
    $subtitulo = $mostrar['subtitulo'];
    $corpo = $mostrar['corpo'];
    $imagem = $mostrar['imagem'];
}

if (!unlink("noticias/img/$imagem")) {
    echo "Erro ao excluir imagem.";
} else {
    echo "Imagem excluída com sucesso.";
}

?>
<div class="alert alert-danger" role="alert">
    <?= $noticia->excluir() ?>
</div>
<meta http-equiv="refresh" content="0.5;URL=?p=noticias/consultar">