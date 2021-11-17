<?php 

/**
 * Vérifie si le prénom $firstname existe dans notre tableau de prénoms.
 * @param string $firstname le prénom à vérifier
 */
function isFirstnameExists(string $firstname)
{
    $firstnameArray = ['Mike', 'Joe', 'Léa', 'Henri'];
    $arrayLength = count($firstnameArray);

    for($i = 0; $i < $arrayLength; $i++) {
        if($firstname === $firstnameArray[$i]) {
            echo 'Le prénom ' . $firstname . ' existe dans le tableau';
        }
    }
}