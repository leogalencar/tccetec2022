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
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Subtítulo
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtSubtitulo" name="txtsubtitulo" placeholder="Subtítulo do noticia" maxlength="200" value="<?= $tipo == "editar" ? $subtitulo : "" ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Corpo
                        </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="txtCorpo" name="txtcorpo" placeholder="Corpo do noticia" maxlength="5000" cols="30" rows="10"><?= $tipo == "editar" ? $corpo : "" ?></textarea>

                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputText" class="col-sm-2 col-form-label">
                            Imagem
                        </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="fileimagem" name="fileimagem" placeholder="Imagem" maxlength="100" value="<?= $tipo == "editar" ? $imagem : "" ?>">
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
            </div>
        </div>
    </div>
</div>
<?php
if (filter_input(INPUT_POST, 'btnsalvar')) {

    if ($tipo == 'editar'){
        if (!unlink("noticias/img/$imagem")) {
            echo "Erro ao excluir imagem.";
        } else {
            echo "Imagem excluída com sucesso.";
        }
    }

    $titulo = filter_input(INPUT_POST, 'txttitulo', FILTER_SANITIZE_STRING);
    $subtitulo = filter_input(INPUT_POST, 'txtsubtitulo', FILTER_SANITIZE_STRING);
    $corpo = filter_input(INPUT_POST, 'txtcorpo', FILTER_SANITIZE_STRING);
    $imagem = filter_input(INPUT_POST, 'fileimagem', FILTER_SANITIZE_STRING);

    echo "<pre>";
    print_r($_FILES['fileimagem']);
    echo "</pre>";

    $img_name = $_FILES['fileimagem']['name'];
    $img_size = $_FILES['fileimagem']['size'];
    $tmp_name = $_FILES['fileimagem']['tmp_name'];
    $error = $_FILES['fileimagem']['error'];
    $img_new_name = '';

    if ($error === 0){
        if ($img_size < 1250000){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");

            if(in_array($img_ex_lc, $allowed_exs)){
                $img_new_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'noticias/img/' . $img_new_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            } else{
                $em = "Tipo de arquivo não suportado.";
                echo $em;
            }
        } else{
            $em = "A imagem é muito grande!";
            echo $em;
            // header("Location: consultar.php?error=$em");
        }
    } else{
        $em = "Erro ao enviar imagem.";
        echo $em;
        // header("Location: consultar.php?error=$em");
    }

    $noticia->setTitulo($titulo);
    $noticia->setSubtitulo($subtitulo);
    $noticia->setCorpo($corpo);
    $noticia->setImagem($img_new_name);
    //aqui chamo o método salvar
?>

    <div class="alert alert-<?= $tipo == "editar" ? "success" : "primary" ?> mt-3" role="alert">
        <?php
        if ($tipo == "editar") {
            echo $noticia->salvar() ? "editado" : "erro";
        } else {
            $noticia->setId(NULL);
            echo $noticia->salvar();
        }
        ?>
    </div>
<?php
}
