<?php
    session_start();
    require_once ("controleur/controleur.class.php");
    //instanciation de la classe Controleur
    $unControleur = new Controleur();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BeCarFul</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu">
            <ul>
            <li>
                <a class="boutonmenu" href="index2.php?page=0">Accueil</a>
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=1">Offres</a>
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=4">Entraînement</a>
            </li>          
            <li class="logo">
                <p>BeCarFul</p>
            </li>
            <li class="afterlogo">
                <a class="boutonmenu" href="index2.php?page=2">Contact</a>
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=3">Profil</a>
            </li>
            <li>
                <a class="button1" href="index2.php?page=5">Déconnexion</a>
            </li>
            </ul>
    <hr class="ind2">
    </div>


    <?php
        if (isset($_GET['page'])) $page = $_GET['page'];
        else $page = 0;
        //ou $page = (isset($_GET['page']))? $_GET['page'] : 0;

        switch ($page){
            case 0 : require_once("home.php"); break;
            case 1 : require_once("offres.php"); break;
            case 2 : require_once("contact.php"); break;
            case 3 : require_once("profil.php"); break;
            case 4 : require_once("quizz.php"); break;
            case 5 : require_once("logout.php"); break;
        }
    ?>

</body>
</html>