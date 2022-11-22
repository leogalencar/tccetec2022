

<?php
include_once '../class/ProcessoSeletivo.php';
$processoseletivo = new ProcessoSeletivo();
$tipo = $titulo = $corpo = $imagem = $arquivos = "";

if (filter_input(INPUT_GET, 'id') != NULL) {
    $id = filter_input(INPUT_GET, 'id');
    $tipo = "editar";

    $processoseletivo->setId($id);
    $dados = $processoseletivo->consultarPorID();

    foreach ($dados as $mostrar) {
        $titulo = $mostrar['titulo'];
        $unidade = $mostrar['unidade'];
        $corpo = $mostrar['corpo'];
        $imagem = $mostrar['imagem'];
        $arquivos = $mostrar['arquivos'];
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


$dir = "processoseletivo/img/$imagem";
$dir_arquivos = "processoseletivo/arquivos/$arquivos";

$titulo_erro = $unidade_erro = $corpo_erro = $imagem_erro = $arquivos_erro = $confirmacao = '';
$flag = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $img_name = $_FILES['fileimagem']['name'];
    $img_size = $_FILES['fileimagem']['size'];
    $tmp_name = $_FILES['fileimagem']['tmp_name'];
    $error = $_FILES['fileimagem']['error'];
    $img_new_name = '';
    $processoseletivo->setImagem($imagem);

    $arquivos_name = $_FILES['filearquivos']['name'];
    $arquivos_size = $_FILES['filearquivos']['size'];
    $arquivos_tmp_name = $_FILES['filearquivos']['tmp_name'];
    $arquivos_error = $_FILES['filearquivos']['error'];
    $arquivos_new_name = '';
    $processoseletivo->setArquivos($arquivos);


    if (empty($_POST['txttitulo'])) {
        $titulo_erro = "Por favor, insira um título.";
        $flag = false;
    } else {
        $titulo = test_input($_POST['txttitulo']);
    }
    if (empty($_POST['txtunidade'])) {
        $unidade_erro = "Por favor, insira a unidade.";
        $flag = false;
    } else {
        $unidade = test_input($_POST['txtunidade']);
    }
    if (empty($_POST['txtcorpo'])) {
        $corpo_erro = "Por favor, insira o corpo do concurso.";
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
                $img_upload_path = 'processoseletivo/img/' . $img_new_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                $processoseletivo->setImagem($img_new_name);
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
    if ($arquivos_error === 0) {
        if ($arquivos_size < 3250000) {
            $arquivos_ex = pathinfo($arquivos_name, PATHINFO_EXTENSION);
            $arquivos_ex_lc = strtolower($arquivos_ex);
            $allowed_exs = array("pdf");

            if (in_array($arquivos_ex_lc, $allowed_exs)) {
                $arquivos_new_name = 'PDF-' . pathinfo($arquivos_name, PATHINFO_FILENAME) . '.' . $arquivos_ex_lc;
                $arquivos_upload_path = 'processoseletivo/arquivos/' . $arquivos_new_name;
                move_uploaded_file($arquivos_tmp_name, $arquivos_upload_path);
                $processoseletivo->setArquivos($arquivos_new_name);
                $arquivos_erro = '';
            } else {
                (($tipo !== 'editar') ? $flag = false : '');
                $arquivos_erro = "Tipo de arquivo não suportado.";
            }
        } else {
            (($tipo !== 'editar') ? $flag = false : '');
            $arquivos_erro = "O arquivo é muito grande!";
        }
    } else {
        (($tipo !== 'editar') ? $flag = false : '');
        $em = "Erro ao enviar arquivo.";
        $arquivos_erro = "Por favor, insira um arquivo relacionado ao processo seletivo.";
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

    if ($tipo == 'editar' && $arquivos_erro == '' && $arquivos != null) {
        if (file_exists($dir_arquivos)) {
            if (!unlink($dir_arquivos)) {
                echo "Erro ao excluir arquivo.";
            } else {
                $arquivos = '';
            }
        }
    }

    if ($flag) {
        $processoseletivo->setTitulo($titulo);
        $processoseletivo->setUnidade($unidade);
        $processoseletivo->setCorpo($corpo);

        if ($tipo == "editar") {
            $confirmacao = $processoseletivo->salvar() ? "editado" : "erro";
        } else {
            $processoseletivo->setId(NULL);
            $confirmacao = $processoseletivo->salvar();
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
                            <input type="text" class="form-control" id="txtTitulo" name="txttitulo" placeholder="Título do concurso" maxlength="100" value="<?= $tipo == "editar" ? $titulo : "" ?>">
                            <span><?= $titulo_erro ?></span>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Unidade
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtUnidade" name="txtunidade" placeholder="Unidade do concurso" maxlength="200" value="<?= $tipo == "editar" ? $unidade : "" ?>">
                            <span><?= $unidade_erro ?></span>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Corpo
                        </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="txtCorpo" name="txtcorpo" placeholder="Corpo do concurso" maxlength="5000" cols="30" rows="10"><?= $tipo == "editar" ? $corpo : "" ?></textarea>
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
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Arquivos (PDF)
                        </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="filearquivos" name="filearquivos" placeholder="Arquivos de concurso" maxlength="100" value="<?= $tipo == "editar" ? $arquivos : "" ?>">
                            <span><?= $arquivos_erro ?></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4 pe-md-5 justify-content-center justify-content-md-end">
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary w-100" name="btnsalvar" value="Cadastrar">
                        </div>
                        <div class="col-md-2 mt-2 mt-md-0">
                            <a href="?p=processoseletivo/consultar" class="btn btn-danger w-100">Voltar</a>
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