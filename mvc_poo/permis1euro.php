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
<<<<<<< HEAD
    <?php
        if ( ! isset($_SESSION['email'])) //pas de connexion
        {
            echo '
            <div class="menu">
            <ul>
            <li>
                <a class="boutonmenu" href="index.php?page=0">Accueil</a>
            </li>
            <li>
                <a class="boutonmenu" href="index.php?page=1">Offres</a>
            </li>         
            <li class="logo">
                <p>BeCarFul</p>
            </li>
            <li class="afterlogo">
                <a class="boutonmenu" href="index.php?page=2">Contact</a>
            </li>
            <li>
                <a class="button1" href="index.php?page=3">Connexion</a>
            </li>
            </ul>
    <hr class="ind1">
    </div>';
        } else {
            echo '
            <div class="menu">
            <ul>
=======
    <div class="menu">
        <h1>BeCarFul</h1>

        <ul class="menu-1-2">
>>>>>>> b4214e8bfd9ac8bb7eb3537efe417a652d1bc801
            <li>
                <a class="boutonmenu" href="index2.php?page=0">Accueil</a>
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=1">Offres</a>
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=4">Entraînement</a>
<<<<<<< HEAD
            </li>          
            <li class="logo">
                <p>BeCarFul</p>
            </li>
            <li class="afterlogo">
                <a class="boutonmenu" href="index2.php?page=2">Contact</a>
=======
>>>>>>> b4214e8bfd9ac8bb7eb3537efe417a652d1bc801
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=2">Contact</a>
            </li>
            <li>
<<<<<<< HEAD
                <a class="button1" href="index2.php?page=5">Déconnexion</a>
            </li>
            </ul>
    <hr class="ind2">
    </div>';
        }
    ?>
=======
                <a class="boutonmenu" href="index2.php?page=3">Profil</a>
            </li>
            <li>
                <a class="button1" href="index2.php?page=5">Déconnexion</a>
            </li>
        </ul>
    </div>
>>>>>>> b4214e8bfd9ac8bb7eb3537efe417a652d1bc801
    <hr>
    <br>
    <br>
    <br>
    

    <h2>Le permis à 1€ par jour, c’est quoi ?</h2>

    <div class="permis1e" style="width:50%; margin: 80px auto 50px auto; text-align: justify;">
        <p>Le permis à 1€ par jour est un dispositif mis en place par l'État, en partenariat avec les établissements prêteurs et les écoles de conduite*, pour aider les jeunes à financer leur formation au permis de conduire.</p>
        <br>
        <p>L’objectif : favoriser l’accès au permis de conduire et l'insertion professionnelle des jeunes.</p>
        <br>
        <p>Il est destiné à tous les jeunes de 15 à 25 ans qui veulent s'inscrire à une formation au permis de conduire voiture (permis B) ou au permis de conduire moto (permis A1 et A2). Il est bien entendu accessible aux jeunes qui souhaitent bénéficier des formations de conduites accompagnées (conduite anticipée et conduite supervisée).</p>
        <br>
        <p>Le permis à 1€ par jour permet d'étaler le coût de la formation sur plusieurs mois, par l'octroi d'un prêt à taux zéro. Le crédit accordé au jeune ne comprend aucun frais de dossier et l'Etat prend en charge les intérêts.</p>
    </div>

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>

</body>
</html>