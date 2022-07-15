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
                    <a class="nav-item nav-link active" href="cursos.php">Cursos</a>
                    <a class="nav-item nav-link" href="http://etecitu.com.br/2020/" target="_blank">EPA Virtual</a>
                    <a class="nav-item nav-link" href="noticias.php">Notícias</a>
                    <a class="nav-item nav-link" href="processoseletivo.php">Processo Seletivo</a>
                    <a class="nav-item nav-link" href="vestibulinho.php">Vestibulinho</a>
                    <a class="nav-item nav-link" href="calendario.php">Calendário</a>
                    <a class="nav-item nav-link" href="planoescolar.php">Plano Escolar</a>
                    <a class="nav-item nav-link" href="contato.php">Contato</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- NAV !-->
    <div class="container mb-2 mt-5">
        <nav aria-label="breadcrumb">
            
            <ol class="breadcrumb mb-5" breadcrumb-msg="Você está em:">
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Página Inicial</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cursos</li>
            </ol>
        </nav>

        <div class="title-section mb-5">
            <h1>
                Cursos
            </h1>
        </div>

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
    </div>


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