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

                <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="margin-bottom: 2rem;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="javascript:void(0)">Filtros</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item" style="margin-right: 20px">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Modalidade - Período</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </li>
                                <li class="nav-item">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Área (Eixo Tecnológico)</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="text" placeholder="Pesquisar">
                                <button class="btn btn-primary" type="button">Pesquisar</button>
                            </form>
                        </div>
                    </div>
                </nav>

                <!-- CARDS CURSOS !-->
                <section id="cursos">
                    <div class="row mb-4 text-center">
                        <div class="col-4 text-wk-center">
                            <div class="card" style="max-width: 18rem;">
                                <img class="card-img-top img-cursos" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h4 class="card-title">Desenvolvimento de Sistemas</h4>
                                    <p class="mt-4"><a href="#" class="btn btn-outline-dark">Ver mais</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-wk-center">
                            <div class="card" style="max-width: 18rem;">
                                <img class="card-img-top img-cursos" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h4 class="card-title">Desenvolvimento de Sistemas</h4>
                                    <p class="mt-4"><a href="#" class="btn btn-outline-dark">Ver mais</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-wk-center">
                            <div class="card" style="max-width: 18rem;">
                                <img class="card-img-top img-cursos" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h4 class="card-title">Desenvolvimento de Sistemas</h4>
                                    <p class="mt-4"><a href="#" class="btn btn-outline-dark">Ver mais</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-padrao text-center">
                        <div class="col-4 text-wk-center">
                            <div class="card" style="max-width: 18rem;">
                                <img class="card-img-top img-cursos" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h4 class="card-title">Desenvolvimento de Sistemas</h4>
                                    <p class="mt-4"><a href="#" class="btn btn-outline-dark">Ver mais</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-wk-center">
                            <div class="card" style="max-width: 18rem;">
                                <img class="card-img-top img-cursos" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h4 class="card-title">Desenvolvimento de Sistemas</h4>
                                    <p class="mt-4"><a href="#" class="btn btn-outline-dark">Ver mais</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-wk-center">
                            <div class="card" style="max-width: 18rem;">
                                <img class="card-img-top img-cursos" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h4 class="card-title">Desenvolvimento de Sistemas</h4>
                                    <p class="mt-4"><a href="#" class="btn btn-outline-dark">Ver mais</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </section>
        </div>


        <!-- FOOTER !-->
        <?php include_once 'footer.php' ?>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="../js/script.js"></script>

</body>

</html>