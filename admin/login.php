<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: painel.php');
}

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

<?php $title = 'Login'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'login.php'; ?>

<body class="bg-light" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <?php require_once('../public/navbar.php'); ?>

    <!-- CONTEÚDO !-->
    <main class="m-auto w-100">
        <div class="container" style="margin: 3rem auto 3rem auto">

            <section class="conteudo">

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <form class="form-login" action="loginscript.php" method="POST">
                            <section class="title mb-5">
                                <h1 class="mb-3 text-center">Login</h1>
                            </section>

                            <?php
                            if (isset($_SESSION['nao_autenticado'])) :
                            ?>
                                <div class="row mb-3 justify-content-center">
                                    <div class="col-6 text-center alert alert-danger" role="alert">
                                        <span>Usuário ou senha inválidos.</span>
                                    </div>
                                </div><!-- /.row -->
                            <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                            ?>
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <label for="usuario">Usuário</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" data-sb-validations="required">
                                    <div class="invalid-feedback" data-sb-feedback="nome:required">Por favor, digite seu usuário.</div>
                                </div>
                            </div><!-- /.row -->
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="senha" data-sb-validations="required">
                                    <div class="invalid-feedback" data-sb-feedback="nome:required">Por favor, digite sua senha.</div>
                                </div>
                            </div><!-- /.row -->
                            <div class="row mb-3 justify-content-center">
                                <div class="col-6 text-center">
                                    <input type="submit" value="Entrar" id="submitButton" class="btn btn-primary rounded">
                                </div>
                            </div><!-- /.row -->
                            <p class="mt-5 mb-3 text-muted text-center">© ETEC - 2022</p>
                        </form>
                    </div>
                </div>

            </section>

        </div>
    </main>

    <!-- FOOTER !-->
    <?php include_once '../public/footer.php' ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>

</body>

</html>