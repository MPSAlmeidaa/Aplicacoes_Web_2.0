<?php
session_start();

$nome_servidor = "sql10.freemysqlhosting.net";
$nome_usuario = "sql10625344";
$senha = "P2PgaExnIp"; 
$nome_banco = "sql10625344";

$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
if ($conecta->connect_error === true) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM dados WHERE email = '$email' AND senha = '$senha'";
$resultado = $conecta->query($sql);
if ($resultado->num_rows > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location: ../Home.php");
} else {
    session_unset();
    session_destroy();
    echo "<script> 
            alert('Email ou senha incorretos');
            window.location.href = '../index.php';
          </script>";
}

$conecta->close();
?>

