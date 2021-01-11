<div class="profil">
	<h2>Mon profil</h2>
</div>

<?php
    $leMoniteurEdit = null; //aucune classe au début du fichier

    $lesMoniteurs = $unControleur->selectAllMoniteur ();
    //on les affiche
    require_once ("vue/vue_moniteur.php");
?>

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>