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
    <link rel="stylesheet" href="../css/contatoform.css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                    <a class="nav-item nav-link nav-transform" href="index.php">Home</a>
                    <a class="nav-item nav-link nav-transform" href="cursos.php">Cursos</a>
                    <a class="nav-item nav-link nav-transform" href="http://etecitu.com.br/2020/" target="_blank">EPA Virtual</a>
                    <a class="nav-item nav-link nav-transform" href="noticias.php">Notícias</a>
                    <a class="nav-item nav-link nav-transform" href="processoseletivo.php">Processo Seletivo</a>
                    <a class="nav-item nav-link nav-transform" href="vestibulinho.php">Vestibulinho</a>
                    <a class="nav-item nav-link nav-transform" href="calendario.php">Calendário</a>
                    <a class="nav-item nav-link nav-transform" href="planoescolar.php">Plano Escolar</a>
                    <a class="nav-item nav-link nav-transform active" href="contato.php">Contato</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Contato</li>
                </ol>
            </nav>

            <section class="conteudo">
                <h1 class="title-section mb-3">Contato</h1>
                <h5 class="subtitle mb-5">
                    Dúvidas? Entre em contato conosco preenchendo o formulário abaixo.
                </h5>
                <div class="row">
                    <div class="col-md-7">
                        <form id="formcontato" action="" class="pe-md-5 mb-5 border-md-end" data-sb-form-api-token="API_TOKEN">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" data-sb-validations="required">
                                    <div class="invalid-feedback" data-sb-feedback="nome:required">Por favor, digite seu nome.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="assunto">Assunto</label>
                                    <input type="text" class="form-control" name="assunto" id="assunto" aria-required="true" data-sb-validations="required">
                                    <div class="invalid-feedback" data-sb-feedback="assunto:required">Por favor, digite o assunto da mensagem.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control" name="email" id="email" aria-required="true" data-sb-validations="required, email">
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Por favor, digite seu e-mail.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">O endereço de e-mail inserido não é válido.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" aria-required="true" data-sb-validations="required">
                                    <div class="invalid-feedback" data-sb-feedback="telefone:required">Por favor, digite seu telefone.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="mensagem">Mensagem</label>
                                    <textarea class="form-control mensagem" name="mensagem" id="mensagem" cols="30" rows="10" data-sb-validations="required" maxlength="1024"></textarea>
                                    <div class="invalid-feedback" data-sb-feedback="mensagem:required">Por favor, digite a mensagem.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <!-- Form submissions success message -->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">Enviado com sucesso.</div>
                                    </div>

                                    <!-- Form submissions error message -->
                                    <div class="d-none" id="submitErrorMessage">
                                        <div class="text-center text-danger mb-3">Erro ao enviar. Por favor, tente novamente mais tarde.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <input type="submit" value="Enviar" id="submitButton" class="btn btn-primary rounded disabled">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <div class="row">
                            <div class="info text-center">
                                <a href="https://www.google.com/maps/place/Etec+Martinho+Di+Ciero/@-23.2873546,-47.2914961,17.5z/data=!4m5!3m4!1s0x94cf5ab2d35d2b0d:0x90131a5f0c2272b3!8m2!3d-23.2875038!4d-47.2901985?hl=pt-BR" target="_blank" title="Ver no mapa">
                                    <img src="../img/localizacaoetec.jpg" alt="">
                                    <div class="legenda text-start">
                                        <h6>ETEC MARTINHO DI CIERO</h6>
                                        <p>(11) 4024-1009</p>
                                        <p>Avenida Barata Ribeiro, 410 Vila Prudente de Moraes</p>
                                        <p>CEP 13306-220</p>
                                        <span>Direção</span>
                                        <p>e086dir@cps.sp.gov.br</p>
                                        <span>Acadêmico</span>
                                        <p>e086acad@cps.sp.gov.br</p>
                                        <span>RH</span>
                                        <p>e086adm@cps.sp.gov.br</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- FOOTER !-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 d-flex">
                    <ul class="nav footer-links justify-content-center justify-content-md-between">
                        <li class="nav-item">
                            <a class="nav-link px-2" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="https://www.vestibulinhoetec.com.br/home/">Vestibulinho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="processoseletivo.php">Processo Seletivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="https://nsa.cps.sp.gov.br/">NSA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="http://www.etecitu.com.br/2019/arquivos/index/manualTCC.pdf">Manual do TCC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="secretariaacademica.php">Secretaria Acadêmica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="planogestao.php">Plano Plurianual de Gestão</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="nav footer-links justify-content-center justify-content-md-end">
                        <li>
                            <a class="nav-link px-2" href="https://www.facebook.com/EtecdeItu" class="footer-icons" target="_blank">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a class="nav-link px-2" href="https://www.instagram.com/etecmartinho/" class="footer-icons" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a class="nav-link px-2" href="https://www.youtube.com/channel/UCgiX2_tK8Imaf5OpcQNK-yA" class="footer-icons" target="_blank">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <hr style="color: #252a3c; margin: 1rem 0;">

            <div class="row align-items-center">
                <div class="col-md-9 text-center text-md-start">
                    <p>Copyright © 2022 - Etec Martinho di Ciero - Centro Paula Souza - Avenida Barata Ribeiro, 410 Vila Prudente de Moraes - Itu/SP</p>
                </div>
                <div class="col-md-3 text-center text-md-end">
                    <img src="../img/logo.png" alt="" class="mb-2" style="width: 80px;">
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="../js/sb-forms-latest.js"></script>

</body>

</html>