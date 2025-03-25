<?php
    require_once("Config.php");

    include __DIR__ . ("/Include/Header.html");
    include __DIR__ . ("/Include/Footer.html");

    use Model\Cake;

    $cakes = Cake::getCakes();
?>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
        justify-content: center;
        max-width: 1500px;
        margin: 0 auto;
    }

    .btn {
        background-color: #B0E0E6;
    }

    .card {
        margin-top: 5rem;
        background-color: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
        text-align: center;
        opacity: 0; /* Inicia invisível */
        animation: fadeInUp 0.5s ease-out forwards;
    }

    /* Adiciona um delay diferente para cada card, criando efeito de "um após o outro" */
    .card:nth-child(1) { animation-delay: 0.1s; }
    .card:nth-child(2) { animation-delay: 0.2s; }
    .card:nth-child(3) { animation-delay: 0.3s; }
    .card:nth-child(4) { animation-delay: 0.4s; }
    .card:nth-child(5) { animation-delay: 0.5s; }
    /* Continua se necessário */

    .card:hover {
        transform: scale(1.05);
    }
</style>

<div class="grid-container">
    <?php foreach ($cakes as $c): ?>
        <div class="card">
            <p><strong>ID:</strong> <?= $c->id ?></p>
            <p><strong>Nome:</strong> <?= $c->name ?></p>
            <p><strong>Preço:</strong> R$ <?= number_format($c->price, 2, ',', '.') ?></p>
            <a href="Register.php?op=1&id=<?= $c->id ?>" class="btn">Editar</a>
            <a href="Register.php?op=2&id=<?= $c->id ?>" class="btn" style="margin-top: 6px">Excluir</a>
        </div>
    <?php endforeach; ?>
</div>
