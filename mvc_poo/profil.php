<h2>Mon profil</h2>

<a class="button2" href="logout.php">Déconnexion</a>

<?php
	$leEleveEdit = null; //aucune classe au début du fichier

    $leEleve = $unControleur->selectUnEleve ($_SESSION['email']);
    //on les affiche
    require_once ("vue/vue_eleve.php");

    $laFormuleEdit = null; //aucune classe au début du fichier

    $IdFormule = $unControleur->selectIdFormuleEleve ($_SESSION['email']);

    
    $laFormule = $unControleur->selectUneFormule ($IdFormule); 
    if ($laFormule != null){
    //on les affiche
    require_once ("vue/vue_formule.php");
    //} else {
       // require_once ("vue/vue_choixformule.php");
    }

    $leMoniteurEdit = null; //aucune classe au début du fichier

    $lesMoniteurs = $unControleur->selectAllMoniteur ();
    //on les affiche
    require_once ("vue/vue_moniteur.php");
?>

<br><br><br><br><br><br>

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>