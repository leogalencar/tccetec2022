<?php
include_once '../class/Noticia.php';
include_once 'CalcularTempo.php';
$noticia = new Noticia();
$dados = $noticia->consultar();
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

<?php $title = 'Notícias'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'noticias.php'; ?>



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <?php require_once('navbar.php'); ?>

    <!-- CONTEÚDO !-->
    <main>
        <div class="container mb-padrao mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-5" breadcrumb-msg="Você está em:">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Notícias</li>
                </ol>
            </nav>

            <section class="conteudo">

                <section class="title mb-5">
                    <h1 class="title-section mb-3">Notícias</h1>
                    <h5 class="subtitle mb-5">
                        Confira as últimas notícias da ETEC Martinho di Ciero.
                    </h5>
                </section>

                <section class="noticias">
                    <?php
                    foreach ($dados as $mostrar) { ?>
                        <div class="box-noticias">
                            <div class="row">
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <a class="w-100" href=""><img class="img-noticias" src="../admin/noticias/img/<?= $mostrar['imagem'] ?>" alt=""></a>
                                </div>
                                <div class="col-md-8">
                                    <a class="title-noticias" href="noticiaaberta.php?&id=<?= $mostrar['id'] ?>">
                                        <h4 class="mb-3"><?= $mostrar['titulo'] ?></h4>
                                    </a>
                                    <p><?= $mostrar['subtitulo'] ?></p>
                                    <span class="datetime">
                                        <?php
                                        echo '<p>' . getDateTimeDiff($mostrar['data']) . '</p>';
                                        ?>
                                    </span>
                                </div>
                            </div><!-- /.row -->
                        </div>
                    <?php }
                    ?>
                </section>

            </section>

        </div>
    </main>

    <!-- FOOTER !-->
    <?php include_once 'footer.php' ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>

    <!-- <script>
        const URL =
            "https://gist.githubusercontent.com/prof3ssorSt3v3/1944e7ba7ffb62fe771c51764f7977a4/raw/c58a342ab149fbbb9bb19c94e278d64702833270/infinite.json";
        document.addEventListener("DOMContentLoaded", () => {
            //set up the IntersectionObserver to load more images if the footer is visible.
            //URL - https://gist.githubusercontent.com/prof3ssorSt3v3/1944e7ba7ffb62fe771c51764f7977a4/raw/c58a342ab149fbbb9bb19c94e278d64702833270/infinite.json
            let options = {
                root: null,
                rootMargins: "0px",
                threshold: 0.5,
            };
            const observer = new IntersectionObserver(handleIntersect, options);
            observer.observe(document.querySelector("footer"));
            //an initial load of some data
            getData();
        });

        function handleIntersect(entries) {
            if (entries[0].isIntersecting) {
                console.warn("something is intersecting with the viewport");
                getData();
            }
        }

        function getData() {
            let news = document.querySelector("section");
            news.className = "noticias";
            console.log("fetch some JSON data");
            fetch(URL)
                .then((response) => response.json())
                .then((data) => {
                    // data.items[].img, data.items[].name
                    data.items.forEach((item) => {
                        // let fig = document.createElement("figure");
                        // let fc = document.createElement("figcaption");
                        let box = document.createElement("div");
                        let row = document.createElement("div");
                        let colImg = document.createElement("div");
                        let aImg = document.createElement("a");
                        let img = document.createElement("img");
                        let colTxt = document.createElement("div");
                        let aTxt = document.createElement("a");
                        let h4 = document.createElement("h4");
                        let p = document.createElement("p");
                        let span = document.createElement("span");

                        box.className = "box-noticias";
                        row.className = "row";
                        colImg.className = "col-md-4 mb-5 mb-md-0";
                        colTxt.className = "col-md-8";
                        aImg.className = "w-100";
                        img.src = item.img;
                        img.alt = item.name;
                        img.className = "img-noticias";
                        colTxt.className = "col-md-8";
                        aTxt.className = "title-noticias";
                        h4.className = "mb-3";
                        // p não possui classe
                        span.className = "datetime";

                        box.appendChild(row);
                        row.appendChild(colImg);
                        colImg.appendChild(aImg);
                        aImg.appendChild(img);
                        row.appendChild(colTxt);
                        colTxt.appendChild(aTxt);
                        aTxt.appendChild(h4);
                        colTxt.appendChild(p);
                        colTxt.appendChild(span);
                        news.appendChild(box);
                    });
                });
        }
    </script> -->

</body>

</html>