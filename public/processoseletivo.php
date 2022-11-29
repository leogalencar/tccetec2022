<?php
include_once '../class/ProcessoSeletivo.php';
$processoseletivo = new ProcessoSeletivo();
$dados = $processoseletivo->consultar();
?>

<!DOCTYPE html>
<html>

<head>
    <title>ETEC - Martinho di Ciero</title>
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

<?php $title = 'Processo Seletivo'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'processoseletivo.php'; ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <?php require_once('navbar.php'); ?>

    <!-- CONTEÚDO !-->
    <main>
        <div class="container mb-padrao mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-5" breadcrumb-msg="Você está em:">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Processo Seletivo</li>
                </ol>
            </nav>

            <section class="conteudo">

                <section class="title mb-5">
                    <h1 class="title-section mb-3">Processo Seletivo</h1>
                    <h5 class="subtitle">
                        A porta de entrada para o corpo docente do Centro Paula Souza.
                    </h5>
                </section>

                <section id="cursos">
                    <div class="row text-center">
                        <?php
                        foreach ($dados as $mostrar) { ?>

                            <div class="col-md-3 text-wk-center cardCursos">
                                <div class="card card-cursos">
                                    <img class="card-img-top img-processoseletivo" src="../admin/processoseletivo/img/<?= $mostrar['imagem'] ?>" alt="Imagem de capa do card">
                                    <div class="card-body card-body-cursos">
                                        <h4 class="card-title card-title-cursos"><?= $mostrar['titulo'] ?></h4>
                                        <p class="mt-1" style="font-size: 14px;"><?= $mostrar['data'] ?></p>
                                        <p class="mt-4"><a href="processoseletivoaberto.php?&id=<?= $mostrar['id'] ?>" class="btn btn-outline-dark">Ver mais</a></p>
                                    </div>
                                </div>
                            </div> <?php } ?>
                    </div>
                </section>

            </section>

        </div>
    </main>

    <!-- FOOTER !-->
    <?php include_once 'footer.php' ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>

</body>

</html>