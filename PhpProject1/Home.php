<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    echo "<script> 
            alert('Esta página só pode ser acessada por usuário logado');
            window.location.href = 'index.php';
          </script>";
}

$email = $_SESSION['email'];
$senha = $_SESSION['senha'];



?>

<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/faviconMA.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Mundo Afora</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="Home.php"><h2>Mundo <em>Afora</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Início
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="packages.php">Pacotes</a></li>

                

                
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu">
                      
                      <a class="dropdown-item" href="Perfil.php">Perfil</a>
                      <a class="dropdown-item" href="php/logout.php">Sair</a>
                      
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="">
          <a href="Home.php"><img src="assets/images/ponte jk.webp" alt=""></a>
          <div class="text-content">
            <h2>Venha viajar conosco!</h2><br>
            <h4>Os melhores preços do Centro-Oeste!</h4>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Pacotes em destaque</h2>
              <a href="packages.php">veja mais <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href=""><img src="assets/images/santorinigrecia.jpg" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Grécia - Santorini</h4></a>

                <h6>R$8000 - R$10000</h6>

                <p>Santorini é uma das ilhas Cíclades no Mar Ageu. Ela foi devastada por uma erupção vulcânica no século 16 A.C., moldando para sempre sua paisagem ondulada. As casas brancas, em forma de cubo, das 2 principais cidades, Fira e Oia, ficam nas encostas acima da caldeira (cratera) submersa. Elas avistam o mar, as ilhas menores a oeste e as praias, constituídas de seixos de lava pretos, vermelhos e brancos.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Primavera</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 15 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Voo incluído</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href=""><img src="assets/images/ilhas lofoten.jpg" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Noruega - Ilhas Lofoten</h4></a>

                <h6>$6000 - $8000</h6>

                <p>O arquipélago de Lofoten está localizado na costa norte do país, nas águas do Mar da Noruega, dentro dos limites do Círculo Polar Ártico, um cenário deslumbrante formado por montanhas, baías, ilhas e fiordes. Essa impressionante geografia local, banhada pela luz magnífica daquelas latitudes, é fonte de inspiração para viajantes, artistas e fotógrafos.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Outono</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 15 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Voo incluído</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href=""><img src="assets/images/Milão.jpg" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Itália - Milão</h4></a>

                <h6>$7000 - $9000</h6>

                <p>Milão, uma metrópole na região da Lombardia ao norte da Itália, é uma capital mundial da moda e do design. Cidade da bolsa de valores nacional, trata-se de um centro financeiro também conhecido pelas suas lojas e pelos seus restaurantes sofisticados. A catedral Gothic Duomo di Milano e o convento Santa Maria delle Grazie, onde está o mural de Leonardo da Vinci "A Última Ceia", são testemunhas de séculos de arte e cultura.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Primavera</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 15 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Voo incluído</strong>
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sobre nós</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Nos somos uma empresa que deseja fornecer a todos os nosso clientes a viagem de suas vidas, seja para a lua de mel tão sonhada pelos recém-casados, ou para aquela(as) pessoas que só querem relaxar, ter seu momento de descanso, explorar uma nova cultura ou conhecer um local novo. Procuramos oferecer tranquilidade, rapidez, conforto e o mais importante, memórias e experiências inesquecíveis para você e/ou sua família.  </p>
              <ul class="featured-list">
                <li><a >Passagens aéreas com até 30% de desconto</a></li>
                <li><a >O pacote perfeito para suas férias</a></li>
                <li><a >Somos o 4º site de turismo mais acessado do Brasil</a></li>
                <li><a >Nascemos da ideia de que viajar é para todos e é transformador. Venha com a gente!</a></li>
              </ul>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x1900.jpg);" >
      
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Clientes Contentes</h2>

              
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Geovani Valadares</h4>
                  <p class="n-m"><em>"Foi uma ótima experiência, a empresa cumpriu tudo que prometeu, foi tudo tranquilo, rápido e com ótimos preços."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Isabela Martins</h4>
                  <p class="n-m"><em>"O atendimento e a atenção que nos deram foi incrível e tudo relacionado a viagem foi simplismente perfeito."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Salvador Melo</h4>
                  <p class="n-m"><em>"Essa empresa é tudo de bom, sempre com os melhores preços e o melhor de tudo é que eles não tem nenhum pacote para Caldas Novas(Fui só uma vez e não quero voltar nunca mais)."</em></p>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>


    

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2023 Mundo Afora - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>