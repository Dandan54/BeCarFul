<h2>Mon profil</h2>

<a class="button2" href="logout.php">Déconnexion</a>

<?php
    $leMoniteurEdit = null; //aucune classe au début du fichier

    $lesMoniteurs = $unControleur->selectAllMoniteur ();
    //on les affiche
    require_once ("vue/vue_moniteur.php");
?>

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>