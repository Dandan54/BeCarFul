<h2>Liste des classes de l'école IRIS</h2>
<table border = "1">
    <tr>
    <td>Id Classe</td>
    <td>Nom</td>
    <td>Salle</td>
    <td>Diplome</td>
    <td>Opérations</td>
    </tr>

<?php
    foreach ($lesClasses as $uneClasse) {
        echo "<tr>
        <td>".$uneClasse["idclasse"]."</td>
        <td>".$uneClasse["nom"]."</td>
        <td>".$uneClasse["salle"]."</td>
        <td>".$uneClasse["diplome"]."</td>
        <td>
        <a href='index.php?page=1=1&action=sup&idclasse=".$uneClasse["idclasse"]."'>
        <img src='images/sup.png' height='20' width='20'></a>

        <a href='index.php?page=1=1&action=edit&idclasse=".$uneClasse["idclasse"]."'>
        <img src='images/edit.png' height='20' width='20'></a>
        </td>
        </tr>";
    }
?>

</table>