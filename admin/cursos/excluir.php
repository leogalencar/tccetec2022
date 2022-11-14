<?php include('verificar_login.php'); ?>

<?php
include_once '../class/Curso.php';

$id = filter_input(INPUT_GET, 'id');
$curso = new Curso();
$curso->setId($id);
$dados = $curso->consultarPorID();


foreach ($dados as $mostrar) {
    $titulo = $mostrar['titulo'];
    $subtitulo = $mostrar['subtitulo'];
    $corpo = $mostrar['corpo'];
    $imagem = $mostrar['imagem'];
}

$dir = "cursos/img/$imagem";

if (file_exists($dir)) {
    if (!unlink($dir)) {
        echo "Erro ao excluir imagem.";
    } else {
        echo "Imagem excluída com sucesso.";
    }
}


?>
<div class="alert alert-danger" role="alert">
    <?= $curso->excluir() ?>
</div>
<meta http-equiv="refresh" content="0.5;URL=?p=cursos/consultar">