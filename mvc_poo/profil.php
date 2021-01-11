<div class="profil">
	<h2>Mon profil</h2>
</div>

<?php
	$leEleveEdit = null; //aucune classe au début du fichier

    $leEleve = $unControleur->selectUnEleve ();
    //on les affiche
    require_once ("vue/vue_eleve.php");

    $laFormuleEdit = null; //aucune classe au début du fichier

    $laFormule = $unControleur->selectUneFormule ();
    //on les affiche
    require_once ("vue/vue_formule.php");

    $leMoniteurEdit = null; //aucune classe au début du fichier

    $lesMoniteurs = $unControleur->selectAllMoniteur ();
    //on les affiche
    require_once ("vue/vue_moniteur.php");
?>

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>