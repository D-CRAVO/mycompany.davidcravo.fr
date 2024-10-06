<?php require '../php/functions/navigation.php' ?>

<header>
    <a href="../pages/home.php">
        <img class="logo" src="/src/img/my_company.png" alt="Logo de l'entreprise">
    </a>
    <nav>
        <ul>
            <?= nav_item('/pages/home.php', 'Acceuil') ?>
        </ul>
    </nav>
</header>