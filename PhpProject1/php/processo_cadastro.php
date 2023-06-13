<?php
session_start();

$nome_servidor = "sql10.freemysqlhosting.net";
$nome_usuario = "sql10625344";
$senha = "P2PgaExnIp"; 
$nome_banco = "sql10625344";

$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO dados (nome, email, senha) VALUES (?, ?, ?)";

$stmt = $conecta->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    $mensagem = "Cadastro realizado com sucesso";
    $_SESSION['mensagem'] = $mensagem;
    $_SESSION['nome'] = $nome;
    header("Location: ../index.php");
    exit();
} else {
    $erro = "Erro ao cadastrar: " . $stmt->error;
    $_SESSION['erro'] = $erro;
    header("Location: ../cadastro.php");
    exit();
}

$conecta->close();
?>
