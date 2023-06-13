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

$email = $_SESSION['email'];

// Excluir a conta do banco de dados
$sql = "DELETE FROM dados WHERE email = ?";

$stmt = $conecta->prepare($sql);
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    // Remover todas as informações da sessão
    session_unset();
    session_destroy();

    $mensagem = "Conta excluída com sucesso";
    $_SESSION['mensagem'] = $mensagem;
    echo "<script>alert('Conta excluída com sucesso');</script>";
    header("Location: ../index.php");
    
    exit();
} else {
    $erro = "Erro ao excluir a conta: " . $stmt->error;
    $_SESSION['erro'] = $erro;
    header("Location: ../Perfil.php");
     echo "<script>alert('erro a exclui');</script>";
    exit();
}

$conecta->close();
?>
