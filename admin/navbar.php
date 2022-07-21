<nav class="navbar navbar-expand-sm navbar-dark bg-etec fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="../img/logo.png" alt="" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-collapse-fg-0" id="navbarCollapse">
            <div class="navbar-nav justify-content-end align-items-center text-center">

                <?php
                // Define each name associated with an URL
                $urls = array(
                    'Home' => 'index.php',
                    'Cursos' => 'cursos.php',
                    'EPA Virtual' => 'http://etecitu.com.br/2020/',
                    'Notícias' => 'noticias.php',
                    'Processo Seletivo' => 'processoseletivo.php',
                    'Vestibulinho' => 'vestibulinho.php',
                    'Calendário' => 'calendario.php',
                    'Plano Escolar' => 'planoescolar.php',
                    'Contato' => 'contato.php',
                    
                );

                foreach ($urls as $name => $url) {
                    print '<a ' . 'class="nav-item nav-link nav-transform' . (($currentPage === $url) ? ' active ' : '') . '" ' . 'href="' . $url . '" ' . (($name === 'EPA Virtual') ? 'target="_blank"' : '') . '>' . $name . '</a>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>