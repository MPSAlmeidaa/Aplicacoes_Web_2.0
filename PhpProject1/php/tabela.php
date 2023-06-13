<?php
$nome_servidor = "sql10.freemysqlhosting.net";
$nome_usuario = "sql10625344";
$senha = "P2PgaExnIp";
$nome_banco = "sql10625344";

$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

// Verificar se a solicitação de exclusão foi enviada
if (isset($_GET['email']) && isset($_GET['senha']) && isset($_GET['acao'])) {
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $acao = $_GET['acao'];

    if ($acao === 'excluir') {
        // Excluir o registro correspondente
        $sql_delete = "DELETE FROM dados WHERE email = '$email' AND senha = '$senha'";
        if ($conecta->query($sql_delete) === TRUE) {
            echo "Registro excluído com sucesso.<br>";
        } else {
            echo "Erro ao excluir o registro: " . $conecta->error . "<br>";
        }
    } elseif ($acao === 'atualizar') {
        // Redirecionar para a página de atualização com os parâmetros
        header("Location: php/editar_dados.php?email=$email&senha=$senha");
        exit();
    }
}

// Consulta para recuperar todos os dados da tabela
$sql = "SELECT * FROM dados";
$resultado = $conecta->query($sql);

// Exibir os dados em uma tabela
if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr>";

    // Obter os nomes das colunas
    $field_names = $resultado->fetch_fields();
    foreach ($field_names as $field) {
        echo "<th>" . $field->name . "</th>";
    }
    echo "<th>Ação</th>"; // Coluna para ação

    echo "</tr>";

    // Exibir os dados de cada linha
    while ($linha = $resultado->fetch_assoc()) {
        // Verificar se o nome está em branco
        if ($linha['nome'] !== '') {
            echo "<tr>";

            foreach ($linha as $key => $value) {
                echo "<td>" . $value . "</td>";
            }

            $email = $linha['email'];
            $senha = $linha['senha'];
            echo "<td class='acoes-cell'>
                   
                      <a href='?email=$email&senha=$senha&acao=excluir' class='acao-excluir btn'>Excluir</a>
                      <a href='?email=$email&senha=$senha&acao=atualizar' class='acao-atualizar btn'>Atualizar</a>
                  </td>"; // Links para excluir e atualizar o registro

            echo "</tr>";
        }
    }

    echo "</table>";
} else {
    echo "Nenhum dado encontrado na tabela.";
}

// Fechar a conexão com o banco de dados
$conecta->close();
?>
