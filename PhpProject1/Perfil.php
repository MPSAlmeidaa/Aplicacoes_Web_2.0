<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    echo "<script> 
            alert('Esta página só pode ser acessada por usuário logado');
            window.location.href = 'index.php';
          </script>";
}


$nome_servidor = "sql10.freemysqlhosting.net";
$nome_usuario = "sql10625344";
$senha = "P2PgaExnIp"; 
$nome_banco = "sql10625344";

$conecta = mysqli_connect($nome_servidor, $nome_usuario, $senha, $nome_banco);

if (!$conecta) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

 // Obtém o nome do usuário logado
$email = $_SESSION['email']; // Obtém o email do usuário logado

$sql = "SELECT * FROM dados WHERE email = '$email'";
$resultado = mysqli_query($conecta, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $linha = mysqli_fetch_assoc($resultado);

    // Armazene os dados recuperados em variáveis para uso posterior
    $nome = $linha['nome'];
    $email = $linha['email'];
   
} else {
    echo "Nenhum perfil encontrado.";
}

mysqli_close($conecta);
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

                <li class="nav-item"><a class="nav-link" href="packages.php">Pacotes</a></li>

                

                
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="index.php">Login</a>
                      <a class="dropdown-item active" href="Perfil.php">Perfil</a>
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
     
    <div class="banner">
    <div class="container" align="center">
        <h1>Meu Perfil</h1><br><br>
        <div class="profile-info">
            <h4>Informações Pessoais</h4>
            <h2><p><strong>Bem-vindo: </strong> <?php echo  $nome . "<br>"; ?></p></h2>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
        
        </div>
    </div><br><br>

    
    
    <a href="editar_perfil.php">Editar Perfil</a>
    <a href="index.php">Sair</a>
    
    
    
<form action="php/excluir_conta.php" method="post">
  <input type="submit" value="Excluir Conta">
</form>
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
