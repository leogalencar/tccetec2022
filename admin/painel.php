<?php

include('verificar_login.php');

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

<?php $title = 'Template'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'template.php'; ?>
<?php $url = explode('?p=', "$_SERVER[REQUEST_URI]"); ?>
<?php ((isset($url[1])) ? $actual_link = $url[1] : $actual_link = 'pagina-principal'); ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-etec fixed-top nav-shadow">
            <div class="container justify-content-center">
                <a href="../public/index.php">
                    <img src="../img/logo.png" alt="" width="100px">
                </a>
            </div>
        </nav>
    </header>

    <!-- CONTEÚDO !-->
    <main>
        <div class="container mb-padrao mt-5">
            <div class="row p-4">
                <section class="title mb-3">
                    <h1 class="title-section mb-3">Bem vindo, <?php echo $_SESSION['usuario']; ?></h1>
                    <h5 class="subtitle">
                        Página de administração.
                    </h5>
                </section>
            </div>
            <div class="row rounded p-4">
                <div class="col-md-4 pe-md-4">
                    <nav id="navbar-example3" class="flex-column align-items-stretch bg-etec rounded h-100" style="min-height: 500px;">
                        <nav class="nav nav-pills flex-column justify-content-evenly text-center h-100">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <img class="w-100 p-1" src="../img/logo.png" alt="">
                                    <h7 class="text-light m-1"><?php echo $_SESSION['usuario']; ?></h7>
                                </div>
                            </div>
                            <a class="nav-link nav-link-sidebar<?php echo (($actual_link == 'pagina-principal') ? ' active' : '') ?>" href="?p=pagina-principal">Página Inicial</a>
                            <a class="nav-link nav-link-sidebar<?php echo (($actual_link == 'cursos') ? ' active' : '') ?>" href="?p=cursos">Cursos</a>
                            <a class="nav-link nav-link-sidebar<?php echo ((strpos($actual_link, "noticias") !== false) ? ' active' : '') ?>" href="?p=noticias/consultar">Notícias</a>
                            <a class="nav-link nav-link-sidebar<?php echo (($actual_link == 'calendario') ? ' active' : '') ?>" href="?p=calendario">Calendário</a>
                            <a type="button" class="nav-link nav-link-sidebar" data-bs-toggle="modal" data-bs-target="#myModal">
                                Sair
                            </a>
                            <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tem certeza de que deseja sair?</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Ao sair, você terá que entrar novamente.</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <div class="col-md-2">
                                                <a class="nav-link w-100 p-0 pe-2" href="logout.php"><button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Sair</button></a>
                                            </div>

                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Fechar</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </nav>
                    </nav>
                </div>

                <!-- include de outras paginas -->
                <?php
                $pagina = filter_input(INPUT_GET, 'p');

                if ($pagina == '' || empty($pagina) || $pagina == 'painel' || $pagina == 'painel.php') {
                    include_once 'pagina-principal.php';
                } else {
                    if (file_exists($pagina . '.php')) {
                        include_once $pagina . '.php';
                    } else {
                        echo '<div class="col-12 mt-5">'
                            . '<div class="alert alert-danger" role="alert">'
                            . '<h3>Erro 404</h3>'
                            . '<p>Página não encontrada!</p>'
                            . '</div>'
                            . '</div>';
                    }
                }
                ?>

            </div>
        </div>
    </main>

    <!-- FOOTER !-->
    <?php include_once '../public/footer.php' ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>

</body>

</html>