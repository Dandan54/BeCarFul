<center>
    <br>
    <br>
    <hr>
    <br>
    <p>Liste des moniteurs</p>
    <br>
    <table border="1">
        <tr>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Téléphone</td>
        <td>Mail</td>
        </tr>
    <?php
        foreach ($lesMoniteurs as $unMoniteur) {
            echo "<tr>
            <td>".$unMoniteur["nomMoniteur"]."</td>
            <td>".$unMoniteur["prenomMoniteur"]."</td>
            <td>".$unMoniteur["tel"]."</td>
            <td>".$unMoniteur["mail"]."</td>
            </tr>";
        }
    ?>
    </table>
</center>