<!DOCTYPE html>
<html>

<head>
  <title>Aula exemplo - PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/carousel.css">
  <link rel="stylesheet" href="../css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

  <style type="text/css">

  </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="../img/logo.png" alt="" width="100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="" id="navbarNavAltMarkup">
        <div class="navbar-nav justify-content-end">
          <a class="nav-item nav-link active" href="index.php">Home</a>
          <a class="nav-item nav-link" href="cursos.php">Cursos</a>
          <a class="nav-item nav-link" href="http://etecitu.com.br/2020/" target="_blank">EPA Virtual</a>
          <a class="nav-item nav-link" href="?p=produto/consultar">Notícias</a>
          <a class="nav-item nav-link" href="?p=produto/consultar">Processo Seletivo</a>
          <a class="nav-item nav-link" href="?p=produto/consultar">Vestibulinho</a>
          <a class="nav-item nav-link" href="?p=produto/consultar">Calendário</a>
          <a class="nav-item nav-link" href="?p=produto/consultar">Plano Escolar</a>
          <a class="nav-item nav-link" href="?p=produto/consultar">Contato</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- SLIDER !-->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777"></rect>
          <img src="../img/claudemir.jpg" alt="">
        </svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.0/examples/carousel/?#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777"></rect>
          <img src="../img/a.jpg" alt="">
        </svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.0/examples/carousel/?#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777"></rect>
          <img src="../img/indice.jpg" alt="">
        </svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.0/examples/carousel/?#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- BOTÕES !-->
  <div class="container">
    <div class="row mb-padrao text-center">
      <div class="col-4">
        <a class="btn btn-primary" href="#" role="button">Acesso rápido</a>
      </div>
      <div class="col-4">
        <a class="btn btn-primary" href="#" role="button">Acesso rápido</a>
      </div>
      <div class="col-4">
        <a class="btn btn-primary" href="#" role="button">Acesso rápido</a>
      </div>
    </div>


    <!-- CARDS ANUNCIOS !-->
    <div class="row mb-padrao text-center">
      <div class="col-4 text-wk-center">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">vestibulinho</p>
          </div>
        </div>
      </div>
      <div class="col-4 text-wk-center">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">anuncio2</p>
          </div>
        </div>
      </div>
      <div class="col-4 text-wk-center">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/Vestibulinho2020.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">anuncio3</p>
          </div>
        </div>
      </div>
    </div>

    <!-- RECONHECIMENTO / HISTORIA DA ETEC !-->
    <div class="container text-center mb-padrao">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

    <!-- CARDS RECONHECIMENTO !-->
    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing mb-padrao">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          <p><a class="btn btn-secondary" href="https://getbootstrap.com/docs/5.0/examples/carousel/?#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          <p><a class="btn btn-secondary" href="https://getbootstrap.com/docs/5.0/examples/carousel/?#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="https://getbootstrap.com/docs/5.0/examples/carousel/?#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>

    <!-- <div class="row mb-padrao">
    <div class="col-4 text-wk-center">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">reconhecimento1</p>
        </div>
      </div>
    </div>
    <div class="col-4 text-wk-center">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">reconhecimento2</p>
        </div>
      </div>
    </div>
    <div class="col-4 text-wk-center">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">reconhecimento3</p>
        </div>
      </div>
    </div>
  </div> -->

    <!-- NOTICIAS !-->
    <section class="news">
      <div class="section-title">
        <h1>Últimas notícias</h1>
      </div>

      <hr class="featurette-divider">

      <div class="section-content">
        <div class="row mb-5">
          <div class="col-sm-12">
            <div class="card mb-3">
              <img class="card-img-top news-img" src="../img/download.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Notícia1</h5>
                <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                <p class="card-text"><small class="text-muted">Atualizados 0 minutos atrás</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-sm-12">
            <div class="card mb-3">
              <img class="card-img-top news-img" src="../img/download.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Notícia2</h5>
                <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p class="card-text"><small class="text-muted">Atualizados 0 minutos atrás</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- FOOTER !-->


  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>

</body>

</html>