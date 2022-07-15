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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-expand-sm navbar-dark bg-etec sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="../img/logo.png" alt="" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-collapse-fg-0" id="navbarCollapse">
                <div class="navbar-nav justify-content-end">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="cursos.php">Cursos</a>
                    <a class="nav-item nav-link" href="http://etecitu.com.br/2020/" target="_blank">EPA Virtual</a>
                    <a class="nav-item nav-link" href="noticias.php">Notícias</a>
                    <a class="nav-item nav-link" href="processoseletivo.php">Processo Seletivo</a>
                    <a class="nav-item nav-link" href="vestibulinho.php">Vestibulinho</a>
                    <a class="nav-item nav-link active" href="calendario.php">Calendário</a>
                    <a class="nav-item nav-link" href="planoescolar.php">Plano Escolar</a>
                    <a class="nav-item nav-link" href="contato.php">Contato</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTEÚDO !-->
    <main>
        <div class="container mb-padrao mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-5" breadcrumb-msg="Você está em:">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Calendário</li>
                </ol>
            </nav>

            <section class="conteudo">
                <h1 class="title-section mb-3">Calendário</h1>
                <h5 class="subtitle mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </h5>

                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs mb-5" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">2022 (Sede)</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">2022 (Extensão 1)</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">2022 (Extensão 2)</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="row justify-content-end">
                                    <div class="col-md-2">
                                        <a href="http://www.etecitu.com.br/2019/arquivos/calendario/pdf/5168aacf8bfe9f94f4c7103726481ae16ea538cf.pdf" class="btn box-download py-2" target="_blank">
                                            <span class="pe-1">Baixar</span>
                                            <i class="bi bi-file-earmark-arrow-down"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <img class="calendario-img" src="../img/cal1.jpg" alt="">
                                        <img class="calendario-img" src="../img/cal2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                B
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                C
                            </div>
                            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
                                D
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </section>

        </div>
    </main>

    <!-- FOOTER !-->
    <footer>
        <div class="container">
            <div class="footer-links text-left">
                <span>
                    <a href="contato.php">Contato</a>
                </span>
                <span>
                    <a href="https://www.vestibulinhoetec.com.br/home/">Vestibulinho</a>
                </span>
                <span>
                    <a href="processoseletivo.php">Processo Seletivo</a>
                </span>
                <span>
                    <a href="https://nsa.cps.sp.gov.br/">NSA</a>
                </span>
                <span>
                    <a href="http://www.etecitu.com.br/2019/arquivos/index/manualTCC.pdf">Manual do TCC</a>
                </span>
                <span>
                    <a href="secretariaacademica.php">Secretaria Acadêmica</a>
                </span>
                <span>
                    <a href="planogestao.php">Plano Plurianual de Gestão</a>
                </span>
                <span>
                    <a href="https://www.facebook.com/EtecdeItu" class="footer-icons" target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/etecmartinho/" class="footer-icons" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCgiX2_tK8Imaf5OpcQNK-yA" class="footer-icons" target="_blank">
                        <i class="bi bi-youtube"></i>
                    </a>
                </span>
            </div>
            <hr style="color: #252a3c; margin: 1rem 0;">
            <div class="row align-items-center">
                <div class="col-9 text-center">
                    <p>Copyright © 2022 - Etec Martinho di Ciero - Centro Paula Souza - Avenida Barata Ribeiro, 410 Vila Prudente de Moraes - Itu/SP</p>
                </div>
                <div class="col-3 text-center">
                    <img src="../img/logo.png" alt="" class="mb-2" style="width: 80px;">
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>

</body>

</html>