<?php
include_once '../class/Produto.php';
$prod = new Produto();
$tipo = $nome = $descricao = $preco = "";

if(filter_input(INPUT_GET, 'id') != NULL) {
    $id = filter_input(INPUT_GET, 'id');
    $tipo = "editar";

    $prod->setId($id);
    $dados = $prod->consultarPorID();

    foreach ($dados as $mostrar) { 
        $nome = $mostrar['nome'];
        $descricao = $mostrar['descricao'];
        $preco = $mostrar['preco'];

    }
};
?>

<h3 class="mt-3 text-primary">
    Cadastrar Produto
</h3>

<div class="card shadow">
    <form method="post" name="formsalvar" id="formSalvar" class="m-3" enctype="multipart/form-data">
        <!-- m-3 determinei todas as bordas, não mudei o form-->
        <div class="form-group row">            
            <label for="inputText" class="col-sm-2 col-form-label">                
                Nome
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtNome" name="txtnome" placeholder="Nome do produto" maxlength="50" value="<?= $tipo == "editar" ? $nome : "" ?>">
            </div>
        </div>
        <div class="form-group row">            
            <label for="inputText" class="col-sm-2 col-form-label">                
                Descrição
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtdescricao" name="txtdescricao" placeholder="Descrição do produto" maxlength="100" value="<?= $tipo == "editar" ? $descricao : "" ?>">
            </div>
        </div>
        <div class="form-group row">            
            <label for="inputText" class="col-sm-2 col-form-label">                
                Preço
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtpreco" name="txtpreco" placeholder="Preço do produto" maxlength="20" value="<?= $tipo == "editar" ? $preco : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">            
                <input type="submit" 
                       class="btn btn-primary" 
                       name="btnsalvar" 
                       value="Cadastrar">               
            </div>
            <!-- faltou um link aqui-->
            <a href="?p=produto/consultar" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>
<?php
if (filter_input(INPUT_POST, 'btnsalvar')) {
    
    $nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'txtdescricao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'txtpreco', FILTER_SANITIZE_STRING);
    
    $prod->setNome($nome);
    $prod->setdescricao($descricao);
    $prod->setpreco($preco);
    //aqui chamo o método salvar
    ?>

    <div class="alert alert-<?= $tipo == "editar" ? "success" : "primary" ?> mt-3" role="alert">
        <?php
        if($tipo == "editar"){
            echo $prod->editar() ? "editado" : "erro";
        } else{
            echo $prod->salvar();
        }
        ?>
    </div>

    <?php
}








