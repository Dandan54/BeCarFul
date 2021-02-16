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
        <th>Prénom</th>
        <th>Nom</th>
        <th>Téléphone</th>
        <th>Mail</th>
        </tr>
    <?php
        foreach ($lesMoniteurs as $unMoniteur) {
            echo "<tr>
            <td>".$unMoniteur["prenomMoniteur"]."</td>
            <td>".$unMoniteur["nomMoniteur"]."</td>
            <td>".$unMoniteur["tel"]."</td>
            <td>".$unMoniteur["mail"]."</td>
            </tr>";
        }
    ?>
    </table>
    <br>
    <br>
    <br>
    <br>
</center>