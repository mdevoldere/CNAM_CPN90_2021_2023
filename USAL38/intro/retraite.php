
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Calcul retraite</title>
    </head>
    <body>
        <?php 
            /*
            dans l'url je récupère un paramètre "age" qui doit etre supérieur à 0
            s'il est inférieur, afficher : vous n'êtes pas né
            s'il est inférieur à 65 afficher "il vous reste X années avant la retraite"
            s'il est supérieur à 65 afficher "vous êtes à la retraite depuis X années"
            s'il est égal afficher "BINGO"
            */
            $age = $_GET['age'] ?? 0;
   
            $age = intval($age);
            
            if($age <= 0) {
                echo "Vous n'êtes pas né(e)";
            }
            else if($age > 65) {
                $difference = $age - 65;
                echo "Vous êtes à la retraite depuis $difference années";
                // echo 'Vous êtes à la retraite depuis ' . $difference . ' années';
            }           
            else if($age < 65) {
                $difference = 65 - $age;
                echo "Il vous reste $difference années avant la retraite";
                echo 'Il vous reste ' . $difference . ' années avant la retraite';
            }
            else {
                echo "BINGO vous êtes à la retraite";
            }

        ?>
    </body>
</html>