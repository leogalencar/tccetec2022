<?php
include_once '../class/Curso.php';
$curso = new Curso();
$modalidade = '';
$eixotec = '';
?>

<!DOCTYPE html>
<html>

<head>
    <title>ETEC - Cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../img/etec.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap2.css">
    <link rel="stylesheet" href="../css/colors.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/botão.css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">

    </style>

</head>

<?php $title = 'Cursos'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'cursos.php'; ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <?php require_once('navbar.php'); ?>

    <!-- CONTEÚDO !-->
    <main>
        <div class="container mb-padrao mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-5" breadcrumb-msg="Você está em:">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cursos</li>
                </ol>
            </nav>

            <section class="conteudo">

                <section class="title mb-5">
                    <h1 class="title-section mb-3">Cursos</h1>
                    <h5 class="subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h5>
                </section>

                <div class="form bg-etec mb-5">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-select" aria-label="Default select example" id="modalidade" name="modalidade">
                                    <option value="0" selected disabled>Modalidade - Período</option>
                                    <option value="MTEC - ENSINO MÉDIO COM HABILITAÇÃO TÉCNICA PROFISSIONAL">MTEC</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0">
                                <select class="form-select" aria-label="Default select example" id="eixotec" name="eixotec">
                                    <option value="0" selected disabled>Área (Eixo Tecnológico)</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0">
                                <input id="inputPesquisar" class="form-control" type="text" onkeyup="cardPesquisar()" placeholder="Curso, período, área etc">
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0 text-center">
                                <input type="submit" class="btn btn-danger" type="button" value="Pesquisar"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- CARDS CURSOS !-->
                <section id="cursos">
                    <?php

                    if (empty($_POST['modalidade'])) {
                        $modalidade = '0';
                    } else {
                        $modalidade = $_POST['modalidade'];
                    }
                    if (empty($_POST['eixotec'])) {
                        $eixotec = '0';
                    } else {
                        $eixotec = $_POST['eixotec'];
                    }

                    $dados = $curso->consultarPorNome($modalidade, $eixotec);

                    foreach ($dados as $mostrar) { ?>
                        <div class="row text-center">
                            <div class="col-md-3 text-wk-center cardCursos">
                                <div class="card card-cursos">
                                    <img class="card-img-top img-cursos" src="../admin/cursos/img/<?= $mostrar['imagem'] ?>" alt="Imagem de capa do card">
                                    <div class="card-body card-body-cursos">
                                        <h4 class="card-title"><?= $mostrar['titulo'] ?></h4>
                                        <p class="mt-4"><a href="cursoaberto.php?&id=<?= $mostrar['id'] ?>" class="btn btn-outline-dark">Ver mais</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>

            </section>
        </div>
    </main>


    <!-- FOOTER !-->
    <?php include_once 'footer.php' ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script>
        function cardPesquisar() {
            // Declare variables
            var input, filter, table, h4, card, i, txtValue;
            input = document.getElementById("inputPesquisar");
            filter = input.value.toUpperCase();
            table = document.getElementById("cursos");
            h4 = table.getElementsByClassName("cardCursos");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < h4.length; i++) {
                card = h4[i].getElementsByTagName("h4")[0];
                if (card) {
                    txtValue = card.textContent || card.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        h4[i].style.display = "";
                    } else {
                        h4[i].style.display = "none";
                    }
                }
            }
        }
    </script>

</body>

</html>