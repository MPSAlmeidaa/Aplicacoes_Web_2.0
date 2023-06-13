<?php
$nome_servidor = "sql10.freemysqlhosting.net";
$nome_usuario = "sql10625344";
$senha = "P2PgaExnIp"; 
$nome_banco = "sql10625344";

$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}
echo "Conexão realizada com sucesso <br>";

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO dados (nome, email, senha) VALUES ('$nome', '$login', '$senha')";

if ($conecta->query($sql) === TRUE) {
    echo "Novos registros criados com sucesso<br>";
} else {
    echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
}

//$entrar = $_POST['entrar'];
//$email = $_POST['email'];
//$senha = md5($_POST['senha']);

$sql_verifica = "SELECT * FROM dados WHERE email = '$login' AND senha = '$senha'";
$resultado = $conecta->query($sql_verifica);

if ($resultado->num_rows > 0) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Login realizado com sucesso');
        window.location.href='index.php';
    </script>";
} else {
    echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');
        window.location.href='index.php';
    </script>";
}

$conecta->close();
?>
