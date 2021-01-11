<h2>Liste des enseignements de l'école IRIS</h2>
<table border = "1">
    <tr>
    <td>Id Cours</td>
    <td>Nom Prof</td>
    <td>Prenom Prof</td>
    <td>Nom de la classe</td>
    <td>Le cours</td>
    <td>Coef cours</td>
    <td>Nb heure année</td>
    </tr>

<?php
    foreach ($lesEnseignements as $unCours) {
        echo "<tr>
        <td>".$unCours["idens"]."</td>
        <td>".$unCours["nomProf"]."</td>
        <td>".$unCours["prenomProf"]."</td>
        <td>".$unCours["cours"]."</td>
        <td>".$unCours["coef"]."</td>
        <td>".$unCours["nbheures"]."</td>
        </tr>";
    }
?>

</table>