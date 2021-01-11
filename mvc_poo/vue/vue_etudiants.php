<h2>Liste des étudiants de l'école IRIS</h2>
<table border = "1">
    <tr>
    <td>Id Etudiant</td>
    <td>Nom</td>
    <td>Prenom</td>
    <td>Adresse</td>
    </tr>

<?php
    foreach ($lesEtudiants as $unEtudiant) {
        echo "<tr>
        <td>".$unEtudiant["idetudiant"]."</td>
        <td>".$unEtudiant["nom"]."</td>
        <td>".$unEtudiant["prenom"]."</td>
        <td>".$unEtudiant["adresse"]."</td>
        </tr>";
    }
?>

</table>