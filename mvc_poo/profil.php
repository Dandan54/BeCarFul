<h2>Mon profil</h2>
<br>
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

<br>
<br>
<hr>
<br>

<a class="button3" href="index2.php?page=5">Déconnexion</a>

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>