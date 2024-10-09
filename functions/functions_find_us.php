<?php

function time_slots_html(array $slots){
    if(empty($slots)){
        return 'Fermé';
    }
    $sentence = [];
    foreach($slots as $slot){
        $sentence[] = "{$slot[0]}h/{$slot[1]}h";
    }
    return implode(' et ', $sentence);
}

function selected_date(int $value){
    $class="";
    if($value + 1 === (int)date('N')){
        $class = "selected" ;
    }else{
        $class="";
    }
    return $class;
}

function addresses_html(array $address){
    return <<<HTML
        <p>
            $address[street_address]<br>
            $address[postal_code] $address[city]<br>
            $address[country]
        </p>
    HTML;
}

function in_time_slots(float $time, array $time_slots){
    $open = false;
    foreach($time_slots as $time_slot){
        if($time>=$time_slot[0] && $time<$time_slot[1]){
            $open = true;
        }
    }
    return $open;
}