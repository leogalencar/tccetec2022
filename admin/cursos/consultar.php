<?php include('verificar_login.php'); ?>

<div class="col-md-8 border-start-0 border-md-start ps-4 mt-4 mt-lg-0">
    <div data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
        <div class="overflow-auto" style="height: 500px;" id="item-1">
            <h5>Alterar Cursos</h5>
            <div class="col-2 py-2">
                <a class="btn btn-success float-right" href="?p=cursos/salvar">Cadastrar</a>
            </div>
            <div class="card shadow">
                <!-- striped é para zebrar as linhas, cada uma com uma cor-->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Modalidade</th>
                            <th>Eixo Tecnológico</th>
                            <th>Imagem</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--foreach aqui BEGIN-->
                        <?php
                        //estabelecer conversa com a class Curso
                        include_once '../class/Curso.php';
                        $curso = new Curso();

                        $dados = $curso->consultar();

                        foreach ($dados as $mostrar) {
                            $id = $mostrar['id'];
                            $titulo = $mostrar['titulo'];
                            $modalidade = $mostrar['modalidade'];
                            $eixotec = $mostrar['eixotec'];
                            $imagem = $mostrar['imagem'];
                        ?>
                            <tr class="align-middle">
                                <td><?= $id ?></td>
                                <td><?= $titulo ?></td>
                                <td class="w-25"><?= $modalidade ?></td>
                                <td class="w-25"><?= $eixotec ?></td>
                                <td class="w-25"><img class="w-100" height="100" src="cursos/img/<?= $imagem ?>" alt=""></td>
                                <td class="w-25 text-center">
                                    <a href="?p=cursos/salvar&id=<?= $id ?>" class="btn btn-primary ml-2">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a type="button" class="btn btn-danger ml-2" data-bs-toggle="modal" data-bs-target="#modalExcluir<?= $id ?>">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>

                                    <div class="modal fade" id="modalExcluir<?= $id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tem certeza de que deseja excluir?</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <p>Essa ação não pode ser revertida.</p>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <div class="col-md-3">
                                                        <a class="nav-link w-100 p-0 pe-2" href="?p=cursos/excluir&id=<?= $id ?>"><button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Excluir</button></a>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Fechar</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        <!--foreach aqui END-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>