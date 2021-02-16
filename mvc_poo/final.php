<?php
    include "database.php";
?>

<?php
    session_start();
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

    <br>
    <br>
    <br>

        <h2>Fin du questionnaire</h2>

		<div class="quizz">
			<p>Félicitations, vous avez terminé le questionnaire !</p>
			<br>
			<p>Score final : <?php echo $_SESSION['score']; ?></p>
		</div>	

		<?php
    	$_SESSION['score'] = null;
    	?>
		
		<a class="button2" href="question.php?n=1">Recommencer</a>

        <footer>
            © 2020 - TOUS DROITS RÉSERVÉS
        </footer>
    </body>
</html>