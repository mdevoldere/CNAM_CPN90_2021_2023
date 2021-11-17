<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width:device-width, inital-scale=1" >
    <title>Employees</title>
    </head>
    <body>
    <h1>Employees</h1>
        <?php 
        // commentaire
        /**
         * @var array $firstnames un tableau de prénoms
         */
        $firstnameArray = ['Mike', 'Joe', 'Léa', 'Henri'];
        //var_dump($firstnameArray);
        //$a = array('Mike', 'Joe');
        $firstname = $_GET['firstname'] ?? 'Groot';
        echo 'Vous avez saisi: ' . $firstname;
        echo '<hr>';
        $arrayLength = count($firstnameArray);
        /*$firstItem = $firstnameArray[0]
        $secondItem = $firstnameArray[1];*/

        for($i = 0; $i < $arrayLength; $i++) {
              if($firstname === $firstnameArray[$i]) {
                echo 'Le prénom ' . $firstname . ' existe dans le tableau';
            }
        }

        $firstname = 'Toto';

        for($i = 0; $i < $arrayLength; $i++) {
            if($firstname === $firstnameArray[$i]) {
              echo 'Le prénom ' . $firstname . ' existe dans le tableau';
          }
      }




        ?>
        <script>
            const firstname = 'Mike';
            const firstnameArray = ['Mike', 'Joe', 'Léa', 'Henri'];
            const arrayLength = firstnameArray.length;

            for(let i = 0; i < arrayLength; i++) {
                if(firstname === firstnameArray[i]) {
                    console.log('Le prénom ' + firstname + ' a été trouvé');
                }
            }
        </script>
    </body>
</html>