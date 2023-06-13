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
<html lang="en">

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
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Início
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="packages.php">Pacotes</a></li>

                


                

                
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="index.php">Login</a>
                      <a class="dropdown-item" href="Perfil.php">Perfil</a>
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Encotre o seu próximo destino</h4>
              <h2>Explore o Mundo!</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <a href=""><img src="assets/images/miami.webp" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Miami</h4></a>

                <h6>R$8000 - R$10000</h6>

                <p>Miami é uma cidade internacional no extremo sudeste da Flórida. Sua influência cubana se reflete nos cafés e lojas de charutos que ocupam a Calle Ocho, em Little Havana. Nas águas de cor azul-turquesa da Biscayne Bay ficam Miami Beach e South Beach, um bairro glamouroso conhecido por suas construções coloridas em art déco, areia branca, hotéis para surfistas e casas noturnas famosas.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Verão</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 15 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Voo incluído</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href=""><img src="assets/images/riodej.jpg" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Rio de Janeiro</h4></a>

                <h6>$6000 - $8000</h6>

                <p>O Rio de Janeiro é um estado no sudeste do Brasil. A sua capital, com o mesmo nome, é conhecida pelas praias, o Pão de Açúcar e a estátua do Cristo Redentor no cimo do morro do Corcovado. O ponto de referência do arquiteto Oscar Niemeyer, o Museu de Arte Contemporânea de Niterói, fica do lado oposto da Baía de Guanabara, em Niterói. Ao longo da costa atlântica do estado, encontra-se Ilha Grande, uma ilha arborizada rodeada de praias, e a cidade colonial de Paraty.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Verão</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 15 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Voo incluído</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href=""><img src="assets/images/Japanni.jpg" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Japão</h4></a>

                <h6>$10000 - $13000</h6>

                <p>O Japão, país insular no Oceano Pacífico, tem cidades densas, palácios imperiais, parques nacionais montanhosos e milhares de santuários e templos. Os trens-bala Shinkansen conectam as principais ilhas: Kyushu (com as praias subtropicais de Okinawa), Honshu (onde ficam Tóquio e a sede do memorial da bomba atômica de Hiroshima) e Hokkaido (famosa como destino para a prática de esqui). Tóquio, a capital, é conhecida por seus arranha-céus, lojas e pela cultura pop.</p>

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
              <a href=""><img src="assets/images/porto seguro.jpg" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Bahia - Porto Seguro</h4></a>

                <h6>$4000 - $6000</h6>

                <p>Porto Seguro é uma estância turística costeira no estado brasileiro da Bahia. Possui aproximadamente 90 quilómetros de praias tropicais, incluindo a popular Praia de Taperapuãn. A cidade é também conhecida pela vibrante vida noturna, centrada no passeio repleto de bares, Passarela do Álcool. Durante a altura do Carnaval, artistas com trajes extravagantes e desfiles de músicos de samba ajudam a criar uma festa de rua de arromba.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Verão</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 15 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Voo incluído</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href=""><img src="assets/images/João Pessoa.jpg" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Paraíba - João Pessoa</h4></a>

                <h6>$4000 - $7000</h6>

                <p>João Pessoa é uma cidade costeira próxima da foz do rio Paraíba, no leste do Brasil. A sua cidade velha é conhecida pela arquitetura barroca e art nouveau. A igreja de São Francisco, do século XVI, tem azulejos portugueses pintados no pátio e uma capela ornamentada com ouro. As praias de Tambaú e Cabo Branco estão repletas de bares e discotecas, além de lojas que vendem artesanato local de madeira e cerâmica.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Verão</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 15 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Voo incluído</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href=""><img src="assets/images/ilhjadamadeira.jpg" alt=""></a>
              <div class="down-content">
                <a href=""><h4>Portugal - Ilha da Madeira</h4></a>

                <h6>$6000 - $8000</h6>

                <p>A Madeira é a principal ilha do arquipélago da Madeira, uma região autónoma de Portugal frente à costa noroeste de África. A paisagem acidentada e vulcânica é atravessada por levadas (antigos canais de irrigação) com trilhos pedestres. Um trilho sobe até ao Pico Ruivo. As adegas, que produzem o vinho generoso da Madeira, estão espalhadas por toda a ilha. Na costa sul, a capital, o Funchal, é conhecida pela sua Sé do século XVI.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Primavera</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 15 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Voo incluído</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <ul class="pages">
              <li ><a href="packages.php">1</a></li>
              <li class="active"><a href="#">2</a></li>
              
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>