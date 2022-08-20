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

<?php $title = 'Notícias'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'noticias.php'; ?>

<?php
include_once '../class/Noticia.php';

$id = filter_input(INPUT_GET, 'id');
$noticia = new Noticia();
$noticia->setId($id);
$dados = $noticia->consultarPorID();

foreach ($dados as $mostrar) {
    $titulo = $mostrar['titulo'];
    $subtitulo = $mostrar['subtitulo'];
    $data = $mostrar['data'];
    $corpo = $mostrar['corpo'];
    $imagem = $mostrar['imagem'];
}
?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <?php require_once('navbar.php'); ?>

    <!-- CONTEÚDO !-->
    <main>
        <div class="container mb-padrao mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-5" breadcrumb-msg="Você está em:">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="noticias.php" class="breadcrumb-link">Notícias</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
                </ol>
            </nav>

            <section class="conteudo">

                <section class="title mb-5">
                    <h1 class="title-section mb-3 text-uppercase"><?php echo $titulo ?></h1>
                    <h5 class="subtitle">
                        <?php echo $subtitulo ?>
                    </h5>
                    <span><?php echo $data ?></span>
                </section>

                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <div class="noticias-img">
                            <img class="w-50" src="../admin/noticias/img/<?php echo $imagem ?>" alt="">
                        </div>
                        <div class="noticias-img-legenda">
                            <span>Cras condimentum sem in dui feugiat malesuada — Foto: Reprodução / Etec Martinho di Ciero</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php echo $corpo ?>
                    </div>
                </div><!-- /.row -->

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