<nav class="menu-principal">
    <div class="container">
        <ul>
            <li><a href="index.php" <?= ($paginaAtual == 'index.php') ? 'class="ativo"' : '' ?>>Home</a></li>
            <li><a href="servicos.php" <?= ($paginaAtual == 'servicos.php') ? 'class="ativo"' : '' ?>>Serviços</a></li>
            <li><a href="agendamento.php" <?= ($paginaAtual == 'agendamento.php') ? 'class="ativo"' : '' ?>>Agendamento</a></li>
            <li><a href="contato.php" <?= ($paginaAtual == 'contato.php') ? 'class="ativo"' : '' ?>>Contato</a></li>
        </ul>
    </div>
</nav>