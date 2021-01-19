<?php
	include "database.php";
?>

<?php
	session_start();
?>

<?php
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from question";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from question where idquestion = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from choix where numeroQuestion = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
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

        <ul class="menu-1-2">
            <li>
                <a class="boutonmenu" href="index2.php?page=0">Accueil</a>
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=1">Offres</a>
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=4">Entraînement</a>
            </li>
        </ul>
        <ul class="menu-2-2">
            <li>
                <a class="boutonmenu" href="index2.php?page=2">Contact</a>
            </li>
            <li>
                <a class="boutonmenu" href="index2.php?page=3">Profil</a>
            </li>
            <li>
                <a class="button1" href="index2.php?page=5">Déconnexion</a>
            </li>
        </ul>
    </div>

		<hr class="ind2">

		<h2>Questionnaire</h2>

		<div class="questionnaire">
			<div class="current">
				<h3>Question <?php echo $number; ?> sur <?php echo $total; ?></h3>
			</div>

			<p class="question">
				<?php echo $question['question'] ?>
			</p>

			<form method="post" action="process.php">

				<ul class="choices">
					<?php while($row=$choices->fetch_assoc()): ?>
						<li><input name="choice" type="radio" value="<?php echo $row['idchoix']; ?>" />
						<?php echo $row['reponse']; ?>
						</li>
					<?php endwhile; ?>
				</ul>

					<input type="submit" value="Valider" />
					<input type="hidden" name="number" value="<?php echo $number; ?>" />

			</form>
		</div>

		<footer>
			© 2020 - TOUS DROITS RÉSERVÉS
		</footer>
	</body>
</html>
