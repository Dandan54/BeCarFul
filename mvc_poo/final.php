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
			<h1>BeCarFul</h1>

			<ul class="menu-1">
				<li>
					<a class="boutonmenu" href="index2.php?page=0">Accueil</a>
				</li>
				<li>
					<a class="boutonmenu" href="index2.php?page=1">Offres</a>
				</li>
			</ul>
			<ul class="menu-2">
				<li>
					<a class="boutonmenu" href="index2.php?page=2">Contact</a>
				</li>
				<li>
					<a class="boutonmenu" href="index2.php?page=3">Mon profil</a>
				</li>
			</ul>
		</div>

		<hr>

        <h2>PHP Quizzer</h2>

		<div class="quizz">
			<p>Félicitations ! Vous avez terminé le test</p>
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