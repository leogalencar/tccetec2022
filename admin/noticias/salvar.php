<?php
include_once '../class/Noticia.php';
$noticia = new Noticia();
$tipo = $titulo = $corpo = $imagem = "";

if (filter_input(INPUT_GET, 'id') != NULL) {
    $id = filter_input(INPUT_GET, 'id');
    $tipo = "editar";

    $noticia->setId($id);
    $dados = $noticia->consultarPorID();

    foreach ($dados as $mostrar) {
        $titulo = $mostrar['titulo'];
        $subtitulo = $mostrar['subtitulo'];
        $corpo = $mostrar['corpo'];
        $imagem = $mostrar['imagem'];
    }
};
?>

<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$dir = "noticias/img/$imagem";

$titulo_erro = $subtitulo_erro = $corpo_erro = $imagem_erro = $confirmacao = '';
$flag = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $img_name = $_FILES['fileimagem']['name'];
    $img_size = $_FILES['fileimagem']['size'];
    $tmp_name = $_FILES['fileimagem']['tmp_name'];
    $error = $_FILES['fileimagem']['error'];
    $img_new_name = '';
    $noticia->setImagem($imagem);


    if (empty($_POST['txttitulo'])) {
        $titulo_erro = "Por favor, insira um título.";
        $flag = false;
    } else {
        $titulo = test_input($_POST['txttitulo']);
    }
    if (empty($_POST['txtsubtitulo'])) {
        $subtitulo_erro = "Por favor, insira um subtítulo.";
        $flag = false;
    } else {
        $subtitulo = test_input($_POST['txtsubtitulo']);
    }
    if (empty($_POST['txtcorpo'])) {
        $corpo_erro = "Por favor, insira o corpo da notícia.";
        $flag = false;
    } else {
        $corpo = test_input($_POST['txtcorpo']);
    }
    if ($error === 0) {
        if ($img_size < 1250000) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $img_new_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'noticias/img/' . $img_new_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                $noticia->setImagem($img_new_name);
                $imagem_erro = '';
            } else {
                (($tipo !== 'editar') ? $flag = false : '');
                $imagem_erro = "Tipo de arquivo não suportado.";
            }
        } else {
            (($tipo !== 'editar') ? $flag = false : '');
            $imagem_erro = "A imagem é muito grande!";
        }
    } else {
        (($tipo !== 'editar') ? $flag = false : '');
        $em = "Erro ao enviar imagem.";
        $imagem_erro = "Por favor, insira uma imagem";
    }

    if ($tipo == 'editar' && $imagem_erro == '' && $imagem != null) {
        if (file_exists($dir)) {
            if (!unlink($dir)) {
                echo "Erro ao excluir imagem.";
            } else {
                $imagem = '';
            }
        }
    }

    if ($flag) {
        $noticia->setTitulo($titulo);
        $noticia->setSubtitulo($subtitulo);
        $noticia->setCorpo($corpo);

        if ($tipo == "editar") {
            $confirmacao = $noticia->salvar() ? "editado" : "erro";
        } else {
            $noticia->setId(NULL);
            $confirmacao = $noticia->salvar();
        }
    }
}




?>

<div class="col-md-8 border-start-0 border-md-start ps-4 mt-4 mt-lg-0">
    <div data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
        <div class="overflow-auto" style="height: 500px;" id="item-1">
            <h5>Mudar imagens do slider</h5>
            <div class="card shadow">
                <form method="post" name="formsalvar" id="formSalvar" class="m-3" enctype="multipart/form-data">
                    <!-- m-3 determinei todas as bordas, não mudei o form-->
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Título
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtTitulo" name="txttitulo" placeholder="Título do noticia" maxlength="100" value="<?= $tipo == "editar" ? $titulo : "" ?>">
                            <span><?= $titulo_erro ?></span>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Subtítulo
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtSubtitulo" name="txtsubtitulo" placeholder="Subtítulo do noticia" maxlength="200" value="<?= $tipo == "editar" ? $subtitulo : "" ?>">
                            <span><?= $subtitulo_erro ?></span>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Corpo
                        </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="txtCorpo" name="txtcorpo" placeholder="Corpo do noticia" maxlength="5000" cols="30" rows="10"><?= $tipo == "editar" ? $corpo : "" ?></textarea>
                            <span><?= $corpo_erro ?></span>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Imagem
                        </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="fileimagem" name="fileimagem" placeholder="Imagem" maxlength="100" value="<?= $tipo == "editar" ? $imagem : "" ?>">
                            <span><?= $imagem_erro ?></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4 pe-md-5 justify-content-center justify-content-md-end">
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary w-100" name="btnsalvar" value="Cadastrar">
                        </div>
                        <div class="col-md-2 mt-2 mt-md-0">
                            <a href="?p=noticias/consultar" class="btn btn-danger w-100">Voltar</a>
                        </div>
                    </div>
                </form>
                <div class="alert alert-<?= $tipo == "editar" ? "success" : "primary" ?> mt-3 <?= (($confirmacao !== "") ? "visible" : "invisible") ?>" role="alert">
                    <?= $confirmacao ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('txtCorpo');
</script>