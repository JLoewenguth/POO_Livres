<h1>POO 2, livres</h1>

<p>Vous êtes chargé de créer un projet orienté objet permettant de gérer des livres et
leurs auteurs respectifs.

<h2>Résultat</h2>

<?php
    require_once 'Livre.php';
    require_once 'Auteur.php';


    //auteurs
    $king = new Auteur("KING", "Stephen", "Homme", "1985-01-17");
    $nett = new Auteur("NETT", "Mario", "Homme", "1975-02-07");
    

    //livres - pages, annee de sortie, prix
    $ca = new Livre("Ca", 120, 1980, 9.99, $king);
    $carrie = new Livre("Carrie", 145, 1982, 19.99, $king);
    $cujo = new Livre("Cujo", 220, 1982, 7.99, $king);
    $livreRandom = new Livre("Random", 110, 2001, 9.95, $nett);
    $livreDeux = new Livre("Deux", 198, 2008, 12.98, $nett);


    echo $king->afficherBibliographie();
    echo $nett->afficherBibliographie();

?>
