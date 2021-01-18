<center>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <p class="profiltitre">Liste des moniteurs</p>
    <br>
    <table class="profiltable">
        <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Téléphone</th>
        <th>Mail</th>
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