<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon site</title>
    </head>
    <body>
        <header>
            <h1>Mon site</h1>
        </header>
        <main> 
            <?php 
            
                // http://localhost/intro/?name=
                $name = $_GET["name"] ?? "Anonyme";

                // si $name n'est pas une chaine de caractères OU si $name n'est pas vide
                if(!is_string($name) || empty($name)) {
                    //print("");
                    echo '<p class="">Le nom fourni est vide</p>';
                }
                // si $name ne correspond pas au format attendu 
                // le format est défini par une expression régulière (REGEX)
                else if (!preg_match('/^[a-zA-Z0-9é]{2,32}$/', $name)) {
                    echo '<p>Le nom est invalide !!!</p>';
                }
                // si la donnée est valide
                else {
                    $name = mb_convert_case($name, MB_CASE_TITLE); // convertit la casse d'une chaine
                    echo "Bonjour " . $name . ", bienvenue.";
                }

                
            ?>
        </main>
        <footer>
            Copyright CNAM <?php echo date("Y-m-d H:i:s"); ?>
        </footer>
    </body>
</html>