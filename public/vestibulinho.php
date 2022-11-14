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

<?php $title = 'Vestibulinho'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'vestibulinho.php'; ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <?php require_once('navbar.php'); ?>

    <!-- CONTEÚDO !-->
    <main>
        <div class="container mb-padrao mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-5" breadcrumb-msg="Você está em:">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vestibulinho</li>
                </ol>
            </nav>

            <section class="conteudo">

                <section class="title mb-5">
                    <h1 class="title-section mb-3">Vestibulinho</h1>
                    <h5 class="subtitle">
                        O vestibulinho ETEC é um processo seletivo que seleciona os candidatos para a entrada nas ETECs.
                    </h5>
                </section>

                <div class="row mb-5">
                    <a class="title-noticias" href="https://www.vestibulinhoetec.com.br/home/" target="_blank">
                        
                        <div class="col-12 text-center">
                            <img src="../img/bannervestibulinho.png" alt="">
                        </div>
                        <div class="col-md-12 text-center mt-2">
                            <button class="btn btn-danger w-25">Faça já sua inscrição aqui!</button>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>Dúvidas Frequentes:</h5>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Quais os requisitos para poder disputar uma vaga em algum curso?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>No geral, basta ter concluído o Ensino Fundamental </strong>, sendo necessário apresentar o certificado de conclusão do Ensino Fundamental ou uma Declaração de Conclusão assinada por um agente escolar da escola onde o aluno concluiu o fundamental.<br><br>
                                        <strong>Demais casos:</strong>
                                        <ol>
                                            <li>Quem já concluiu o Ensino Médio ou está cursando: o primeiro deve possuir o Certificado de Conclusão do Ensino Médio e o segundo deve apresentar uma declaração de que está matriculado no Ensino Médio (a partir da 2º série);</li>
                                            <li>Quem está cursando EJA ou ENCCEJA: Possuir o Certificado de Conclusão do Ensino Médio ou declaração que está matriculado a partir do 2º termo do EJA, ou 2 certificados de aprovação em áreas de estudos da EJA/CEEJA, ou Boletim de aprovação do ENCCEJA enviado pelo MEC, ou Certificado de aprovação do ENCCEJA em 2 áreas de estudos avaliadas.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Existe idade mínima para fazer os cursos técnicos?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Apenas para alguns cursos, sendo eles: o Curso Técnico em Enfermagem, o Curso Técnico em Cuidados de Idosos e o Curso Técnico em Serviços de Restaurante e Bar requerem que o aluno tenha a idade mínima de 18 anos. É importante lembrar que nem todos os cursos estão disponíveis em determinada instituição, logo é necessário que o candidato entre em contato com a ETEC escolhida para mais informações.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Onde realizo a inscrição?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A inscrição do Vestibulinho ETEC é feita pelo site oficial do vestibulinho: <a class="title-noticias" href="https://www.vestibulinhoetec.com.br/home/" target="_blank">https://www.vestibulinhoetec.com.br/home/</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Como é a prova?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        O vestibulinho é composto de 40 questões, cada uma contendo cinco alternativas (de A a E), sendo apenas uma correta. A prova leva em conta as competências e habilidades previstas na Base Nacional Comum (BNCC) do Ensino Fundamental II, abarcando conteúdos de Linguagens (Português), Matemática, de Ciências Humanas (Geografia e História) e de Ciências da Natureza que já foram apresentados aos alunos.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Como é a classificação para os cursos?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A nota final é obtida a partir do total de questões acertadas pelo candidato. A nota final é relacionada com o número de vagas disponíveis para o curso desejado. Por exemplo, para um curso que tenha 35 vagas, serão selecionados aqueles que obtiveram uma nota final mais alta que os demais participantes, ocupando assim as 35 primeiras posições.
                                    </div>
                                </div>
                            </div>
                        </div>
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