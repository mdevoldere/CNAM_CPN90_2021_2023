<h2>Catégories</h2>
<ul>

<?php 
    // chemin vers le fichier movies.json
    $path = dirname(__DIR__) . '/movies.json';
    // on récupère le contenu du fichier
    $movies = file_get_contents($path);
    // on convertit le JSON en tableau PHP
    $movies = json_decode($movies, true);
    
    foreach($movies as $oneMovie) {
    ?>
        <li><a href="#"><?= $oneMovie['movie_subject']; ?></a></li>
    <?php
    }
?>

</ul>