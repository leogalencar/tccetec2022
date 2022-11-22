

<?php
include_once '../class/ProcessoSeletivo.php';

$id = filter_input(INPUT_GET, 'id');
$processoseletivo = new ProcessoSeletivo();
$processoseletivo->setId($id);
$dados = $processoseletivo->consultarPorID();


foreach ($dados as $mostrar) {
    $titulo = $mostrar['titulo'];
    $subtitulo = $mostrar['subtitulo'];
    $corpo = $mostrar['corpo'];
    $imagem = $mostrar['imagem'];
}

$dir = "processoseletivo/img/$imagem";

if (file_exists($dir)) {
    if (!unlink($dir)) {
        echo "Erro ao excluir imagem.";
    } else {
        echo "Imagem excluída com sucesso.";
    }
}


?>
<div class="alert alert-danger" role="alert">
    <?= $processoseletivo->excluir() ?>
</div>
<meta http-equiv="refresh" content="0.5;URL=?p=processoseletivo/consultar">