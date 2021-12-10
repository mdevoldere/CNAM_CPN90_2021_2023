<script>
let password = 'azerty1234';

let length = password.length > 8;

let regexMaj = /^[A-Z]$/;

let isMajOk = password.match(regexMaj);
</script>

<?php 
/*
    \d     any decimal digit
    \D     any character that is not a decimal digit
    \h     any horizontal white space character
    \H     any character that is not a horizontal white space character
    \s     any white space character
    \S     any character that is not a white space character
    \v     any vertical white space character
    \V     any character that is not a vertical white space character
    \w     any "word" character
    \W     any "non-word" character
*/
// $length = strlen($password) > 8; // 

// $regex = "(?=^.{9,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$";

$password = 'azDert@1234';

$isMaj = preg_match("/[A-Z]/", $password); // au moins 1 majuscule

$isMin = preg_match("/[a-z]/", $password); // au moins 1 minuscule

$isSpecialChars = preg_match("/[\W]/", $password); // au moins 1 caractère spécial

$isNumber = preg_match("/[0-9]/", $password); // au moins un chiffre


if($isMaj && $isMin && $isSpecialChars && $isNumber) {
    echo 'Mot de passe valide';
}
else {
    echo 'Mot de passe "<strong>INVALIDE</strong>"';
}

if(!$isMaj || !$isMin || !$isSpecialChars || !$isNumber) {
    echo 'Mot de passe "<strong>INVALIDE</strong>"';
}
else {
    echo 'Mot de passe valide';
}

/*
- 9 caractères minimum OK
- Au moins 1 majuscule
- Au moins 1 minuscule
- Au moins 1 chiffre
- Un caractère spécial
*/

// (?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))