<?php require '../php/functions/navigation.php' ?>

<header>
    <a href="../pages/home.php">
        <img class="logo" src="/src/img/my_company_logo.jpeg" alt="Logo de l'entreprise">
    </a>
    <nav>
        <ul>
            <?= nav_item('/pages/home.php', 'Acceuil') ?>
            <?= nav_item('/pages/find_us.php', 'Nous trouver') ?>
        </ul>
    </nav>
</header>