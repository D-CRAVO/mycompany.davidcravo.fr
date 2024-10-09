<?php require '../functions/navigation.php' ?>

<header>
    <a href="../templates/home.php">
        <img class="logo" src="/assets/images/my_company_logo.jpeg" alt="Logo de l'entreprise">
    </a>
    <nav>
        <ul>
            <?= nav_item('/templates/home.php', 'Acceuil') ?>
            <?= nav_item('/templates/find_us.php', 'Nous trouver') ?>
            <?= nav_item('/templates/portfolio.php', 'Portfolio') ?>
        </ul>
    </nav>
</header>