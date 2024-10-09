<?php 
    include '../includes/init.php'; 
    date_default_timezone_set('Europe/Paris');
    $time = (float)date('H:i');
    $time_slots = TIME_SLOTS[date('w')];
    $open = in_time_slots($time, $time_slots);
?>

<!DOCTYPE html>
<html lang="fr-fr">

    <?php require '../components/head.php' ?>

    <body>

        <?php require '../components/header.php' ?>

        <main class="main_find_us">

        <div class="slots_addresses">
            <img class="building" src="/assets/images/my_company_building.jpeg" alt="Photo du batiment">
            <div class="right">
                <div class="opening_hours">
                    <h2>Horaires d'ouverture :</h2>
                    <?php if($open): ?>
                        <p class="open">L'entreprise est ouverte</p>
                    <?php else: ?>
                        <p class="close">L'entreprise est fermée</p>
                    <?php endif ?>
                    <ul>
                        <?php foreach(DAYS as $k => $day): ?>
                            <li class=<?= selected_date($k) ?>>
                                <?= $day. ' : ' . time_slots_html(TIME_SLOTS[$k]) ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>

                <div class="address">
                    <h2>Adresses :</h2>
                    <?php foreach(ADDRESSES as $address): ?>
                        <p> <?= addresses_html($address) ?> </p>
                    <?php endforeach ?>
                </div>
            </div>            
             
        </div>   
        </main>
        
    </body>
</html>