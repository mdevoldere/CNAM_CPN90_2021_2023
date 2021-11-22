
<?php 
$today = new DateTime();
$future = new DateTime('2034-04-11');

echo 'Aujourd\'hui (année): ' .$today->format('Y') . PHP_EOL;
echo 'Aujourd\'hui (mois): ' .$today->format('m') . PHP_EOL;
echo 'Aujourd\'hui (jour): ' .$today->format('d') . PHP_EOL;

echo 'Futur (année): ' .$future->format('Y') . PHP_EOL;
echo 'Futur (mois): ' .$future->format('m') . PHP_EOL;
echo 'Futur (jour): ' .$future->format('d') . PHP_EOL;

