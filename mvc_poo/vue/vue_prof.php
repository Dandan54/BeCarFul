<h2>Liste des profs de l'école IRIS</h2>
<table border = "1">
    <tr>
    <td>Id Prof</td>
    <td>Nom</td>
    <td>Prenom</td>
    <td>Date entrée</td>
    </tr>

<?php
    foreach ($lesProfs as $unProf) {
        echo "<tr>
        <td>".$unProf["idprof"]."</td>
        <td>".$unProf["nom"]."</td>
        <td>".$unProf["prenom"]."</td>
        <td>".$unProf["dateentree"]."</td>
        </tr>";
    }
?>

</table>