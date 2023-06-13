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
<html>
<head>
    <title>Tabela de Dados</title>
    <style>
        body {
            background: linear-gradient(135deg, #FFA500, #0000FF);
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        th, td {
            border: 1px solid #fff;
            padding: 8px;
        }

        th {
            background-color: #FFA500;
            color: #fff;
        }

        td {
            background-color: #0000FF;
            color: #fff;
        }

        .acoes-cell {
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 5px 10px;
            background-color: #FFA500;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 10px;
        }

        .btn-excluir {
            background-color: #FF0000;
        }
    </style>
</head>
<body>
    <h1>Tabela de Dados</h1>

    <?php include 'php/tabela.php'; ?>
</body>
</html>
