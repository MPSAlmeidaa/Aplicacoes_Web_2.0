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
$nova_senha = $_POST['senha'];

// Atualizar os dados no banco de dados
$sql = "UPDATE dados SET nome = ?, senha = ? WHERE email = ?";

$stmt = $conecta->prepare($sql);
$stmt->bind_param("sss", $nome, $nova_senha, $email);

if ($stmt->execute()) {
    $_SESSION['nome'] = $nome; // Atualizar o nome na sessão
    $mensagem = "Perfil atualizado com sucesso";
    $_SESSION['mensagem'] = $mensagem;
    header("Location:../Perfil.php");
    exit();
} else {
    $erro = "Erro ao atualizar o perfil: " . $stmt->error;
    $_SESSION['erro'] = $erro;
    header("Location: ../editar_perfil.php");
    exit();
}

$conecta->close();
?>
