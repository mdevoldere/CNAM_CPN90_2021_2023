<section class="movies">
    <h2>Tous les films</h2>
    
    <?php 
    // chemin vers le fichier movies.json
    $path = dirname(__DIR__) . '/movies.json';
    // on récupère le contenu du fichier
    $movies = file_get_contents($path);
    // on convertit le JSON en tableau PHP
    $movies = json_decode($movies, true);
    
    foreach($movies as $oneMovie) {
        ?>
        <article>
            <h2><?=$oneMovie['movie_title']; ?></h2>
            <p>Catégorie: <?= $oneMovie['movie_subject']; ?></p>
            <p>Année: <?= $oneMovie['movie_year'];?></p>
        </article>
        <?php
    }
/*
    foreach($movies as $oneMovie) {
        echo '<article>';
        echo '<h2>' . $oneMovie['movie_title'] . '</h2>';
        echo '</article>';
    }
*/


    //echo $movies;

    ?>


</section>