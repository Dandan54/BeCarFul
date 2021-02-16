<br>
<<<<<<< HEAD
<br>
<br>
<center><h2>Mon profil</h2></center>
<br>
=======
>>>>>>> b4214e8bfd9ac8bb7eb3537efe417a652d1bc801

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

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>