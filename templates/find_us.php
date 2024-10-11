<?php 
    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'init.php';
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'head.php'; 
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'header.php';
    
    date_default_timezone_set('Europe/Paris');
    $time = (int)date('H');
    $time_slots = TIME_SLOTS[date('w')-1];
    $open = in_time_slots($time, $time_slots);
?>

<main class="main_find_us">

    <div class="slots_addresses">
        <img class="building" src="/assets/images/find_us/my_company_building.jpeg" alt="Photo du batiment">
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

<?php
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'footer.php';
?>

    
