<?php
session_start();
include '../includes/header.php';
include '../includes/menu.php';
?>

<main class="principal">
    <section class="banner">
        <div class="container">
            <h1>Bem-vindo ao Petverso</h1>
            <p>O universo completo de cuidados para seu pet</p>
            <a href="servicos.php" class="botao">Conheça nossos serviços</a>
        </div>
    </section>

    <section class="destaques">
        <div class="container">
            <h2>Nossos Destaques</h2>
            <div class="cards">
                <div class="card">
                    <img src="assets/img/banho.jpg" alt="Banho e Tosa">
                    <h3>Spa Pet</h3>
                    <p>Banho, tosa e cuidados estéticos profissionais</p>
                </div>
                <div class="card">
                    <img src="assets/img/veterinario.jpg" alt="Veterinário">
                    <h3>Clínica Veterinária</h3>
                    <p>Consultas, exames e vacinação</p>
                </div>
                <div class="card">
                    <img src="assets/img/hotel.jpg" alt="Hotel">
                    <h3>Hotel Pet</h3>
                    <p>Hospedagem segura e confortável</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>