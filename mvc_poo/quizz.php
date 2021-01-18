<?php
    include "database.php";
?>

<?php
    //Get the total questions
    $query="select * from question";
    //Get Results
    $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $total = $results->num_rows;
?>

<h2>Questionnaire</h2>

<div class="quizz">
    <h3>Entrainement au code de la route</h3>

    <ul>
        <li><strong>Nombre de questions : </strong><?php echo $total; ?></li>
        <li><strong>Type : </strong>Choix multiple</li>
        <li><strong>Temps estimé : </strong><?php echo $total*0.5; ?> minutes</li>
    </ul>
</div>

<a class="button2" href="question.php?n=1">Démarrer le quizz</a>

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>