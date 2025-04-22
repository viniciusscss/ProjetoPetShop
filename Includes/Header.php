<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
$titulos = [
    'index.php' => 'Home',
    'servicos.php' => 'Serviços',
    'agendamento.php' => 'Agendamento',
    'contato.php' => 'Contato'
];
$pageTitle = $titulos[$paginaAtual] ?? 'Petverso';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petverso | <?= $pageTitle ?></title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="icon" href="assets/img/favicon.ico">
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            <div class="logo-titulo">
                <img src="assets/img/logo.png" alt="Petverso" class="logo">
                <div class="slogan">Seu pet, seu mundo, nosso cuidado.</div>
            </div>
        </div>
    </header>