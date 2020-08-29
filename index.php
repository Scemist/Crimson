<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#0d1440">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> <!-- 4.1.3 -->
    <link rel="stylesheet" href="css/geral.css">

    <title>Crimson Vinhos</title>
  </head>

  <body class="fundo">
    <main class="container-fluid">
      <section class="row">

        <nav class="navbar navbar-expand-lg navbar-dark d-md-none col-12 corAzul1Fundo">
          <a class="navbar-brand ml-2" href="index.php">
            <h2 class="corCreme fonteOSlight d-inline-block position-relative">Crimson</h2>
            <svg class="position-relative d-inline-block logo" width="1.7em" fill="#fff" enable-background="new 0 0 512 512" viewBox="0 0 512 512">
              <?php include('css/icone.html'); ?>
            </svg>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav ml-3">

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <hr class="my-0">
                  QUIZ
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <hr class="my-0">
                  ADEGA
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <hr class="my-0">
                  SOBRE
                </a>
              </li>

              <li class="nav-item pl-3 parametros">
                <hr class="my-0">
                <span class="navbar-text fonteZSlight">
                  Parâmetros do vinho:
                </span>

                <a class="nav-link" href="#">
                  TIPOS
                </a>
                <a class="nav-link" href="#">
                  ADJETIVOS
                </a>
                </a>
                <a class="nav-link" href="#">
                  CARACTERÍSTICAS
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <aside class="col-12 col-md-1 corAzul1Fundo d-none d-md-inline">
          <div class="row">
            <div class="col-12 mt-3 text-center">
              <a href="index.php">
                <h2 class="corCreme fonteOSlight position-relative"><span>C</span><br>r<br>i<br>m<br>s<br>o<br>n</h2>
                <svg class="position-relative d-inline-block logo" width="3em" fill="#fff" enable-background="new 0 0 512 512" viewBox="0 0 512 512">
                  <?php include('css/icone.html'); ?>
                </svg>
              </a>
            </div>
          </div>
        </aside>

        <article class="col-12 col-md-11">
          <div class="row">
            <div class="col-12">
              <p class="fonteOSlight text-center text-muted mt-5">Crimson Vinhos</p>
              <h4 class="text-center corAzul1 fonteZSlight mt-2 destaque">Seja bem vindaô a um mar vermelho crimson, um site inteiramente dedicado a vinhos.</h4>
              <hr class="mt-5">
            </div>

            <div class="col-12 col-md-4 px-0">
              <img src="css/imagens/vinho01.jpg" class="img-fluid mx-auto d-block" alt=". . .">
            </div>
            <div class="col-12 col-md-4 px-0">
              <img src="css/imagens/vinho01.jpg" class="img-fluid mx-auto d-block" alt=". . .">
            </div>
            <div class="col-12 col-md-4 px-0">
              <img src="css/imagens/vinho01.jpg" class="img-fluid mx-auto d-block" alt=". . .">
            </div>

            <div class="col-12">
              <p class="fonteZSlight text-center h4 mt-5">
                Todo o site foi inteiramente projetado de modo único e direto, pensado com o objetivo de ensinar toda a base sobre vinhos.
                Com isso você vai entender completamente tudo o que é preciso, e então ficará livre para descobrir conhecimentos específicos pelo mundo em cima disso.
              </p>
            </div>

            <div class="col-12">
              <hr class="mt-5">
              <p class="fonteZSlight text-center h4 mt-2">
                Nós dividimos a calssificação do vinho em três, basicamnte você sempre terá três pontos a considerar de um vinho: tipos; adjetivos e características.
              </p>

              <ul class="fonteZSlight h4 mt-5 listaUl">
                <li class="mt-3 listaLi">Todo vinho está em um dos três tipos existentes.</li>
                <li class="mt-3 listaLi">Um vinho pode ter um ou mais adjetivos. </li>
                <li class="mt-3 listaLi">Todo vinho tem as mesmas cinco características, em quantidades diferentes.</li>
              </ul>

              <hr class="mt-5">
              <p class="fonteZSlight text-center h4 mt-2">
                Então aqui está a lista das páginas para estes três pontos, leia os três, e quando terminas, bem, isso é tudo. No fim desta página está um sumário com tudo, assim você sempre poderá voltar no site para servir como consulta:
              </p>
            </div>

            <div class="col-10 col-md-3 mx-auto mt-5">
              <a href="caracteristicas.php">
                <button class="botao py-3 w-100 corAzul1 fonteOSregular mt-2">SEUS TIPOS</button>
              </a>

              <a href="caracteristicas.php">
                <button class="botao py-3 w-100 corAzul1 fonteOSregular mt-2">SEUS ADJETIVOS</button>
              </a>

              <a href="caracteristicas.php">
                <button class="botao py-3 w-100 corAzul1 fonteOSregular mt-2">SUAS CARACTERÍSTICAS</button>
              </a>
            </div>
          </div>

          <div class="row sumario">
            <div class="col-12">
              <hr class="mt-5">
              <p class="fonteOSregular text-center text-muted mt-2 mb-2">SUMÁRIO COMPLETO DO SITE</p>
            </div>

            <div class="col-12 col-md-4">
              <ul class="mt-5">
                <h3 class="mt-3 fonteZSlight mb-4">
                  <a href="#" class="h4">
                    Tipos
                  </a>
                </h3>
                <li class="pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    TINTO
                  </a>
                </li>
                <li class="pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    ROSÉ
                  </a>
                </li>
                <li class="pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    BRANCO
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-12 col-md-4">
              <ul class="mt-5">
                <h3 class="mt-3 fonteZSlight mb-4">
                  <a href="#" class="h4">
                    Adjetivos
                  </a>
                </h3>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    TRANQUILO
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    ESPUMANTE
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    FORTIFICADO
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    SOBREMESA
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    GENEROSO
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    VERDE
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    LARANJA
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteOSlight text-muted h4">
                    AZUL
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-12 col-md-4">
              <ul class="mt-5">
                <h3 class="mt-3 fonteZSlight mb-4">
                  <a href="#" class="h4">
                    CARACTERÍSTICAS
                  </a>
                </h3>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteZSlight h2">
                    Doçura
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteZSlight h2">
                    Acidez
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteZSlight h2">
                    Tanino
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteZSlight h2">
                    Corpo
                  </a>
                </li>
                <li class="mt-2 pl-3 h4">
                  <a href="#" class="fonteZSlight h2">
                    Álcool
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </article>
      </section>
    </main>

    <script src="bootstrap/jquery/jquery-3.3.1.slim.min.js"></script> <!-- jQuery -->
    <script src="bootstrap/popper/popper.min.js"></script> <!-- Popper.js -->
    <script src="bootstrap/js/bootstrap.min.js"></script> <!-- Plugins JavaScript -->

    <script type="text/javascript">

    

    </script>
  </body>
</html>
