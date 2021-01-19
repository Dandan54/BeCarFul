<center>
    <br>
    <br>
    <p class="profiltitre">Mes informations</p>
    <br>
    <table class="profiltable">
        <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Téléphone</th>
        <th>Mail</th>
        </tr>
    <?php
        foreach ($leEleve as $unEleve) {
            echo "<tr>
            <td>".$unEleve["prenom"]."</td>
            <td>".$unEleve["nom"]."</td>
            <td>".$unEleve["d_naissance"]."</td>
            <td>".$unEleve["tel"]."</td>
            <td>".$unEleve["email"]."</td>
            </tr>";
        }
    ?>
    </table>
    <br>
    <table class="profiltable">
        <tr>
        <th>Adresse</th>
        <th>Code Postal</th>
        <th>Ville</th>
        </tr>
    <?php
        foreach ($leEleve as $unEleve) {
            echo "<tr>
            <td>".$unEleve["adresse"]."</td>
            <td>".$unEleve["cp"]."</td>
            <td>".$unEleve["ville"]."</td>
            </tr>";
        }
    ?>
    </table>
</center> 