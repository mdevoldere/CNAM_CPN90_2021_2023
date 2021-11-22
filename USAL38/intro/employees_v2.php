<?php 
$title = 'Employés';
require 'includes/header.php';

require 'functions.php';
//include 'functions.php';

$userInput = $_GET['firstname'] ?? 'Groot';
echo 'Vous avez saisi: ' . $userInput;
echo '<hr>';
// appel de la fonction
isFirstnameExists($userInput);
$a = 'Joe';
isFirstnameExists($a);
isFirstnameExists('Léa');

require 'includes/footer.php';
?>
    