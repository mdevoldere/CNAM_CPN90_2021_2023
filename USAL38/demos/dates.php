<?php 
// Trouver l'écart entre aujourd'hui et la date $future
//date_default_timezone_set('Europe/Paris');

function isValidDate(string $date) {
    try {
        $dateBidon = new DateTime($date);
        return $dateBidon;
    } catch(Exception $e) {
        return false;
    }
}


$future = new DateTime('2025-12-02 21:23:45');
$today = new DateTime();
$interval = $today->diff($future);

echo ($interval->y > 0 ? $interval->y . ' année(s) ' : ' ') . 
     ($interval->m > 0 ? $interval->m . ' mois ' : ' ') . 
     ($interval->d > 0 ? $interval->d . ' jour(s)' : ' '); 

if($interval->y > 0) {
    echo $interval->y . ' année(s)';
} else {
    echo ' ';
}

//echo '<pre>' .var_export($interval, true) . '</pre>';
/*
var_dump($today);
echo '<hr>';
var_dump($future);*/