<center>
    <br>
    <br>
    <hr>
    <br>
    <p>Mes informations</p>
    <br>
    <table border="1">
        <tr>
        <td>Prénom</td>
        <td>Nom</td>
        <td>Téléphone</td>
        <td>Mail</td>
        <td>Adresse</td>
        <td>Code Postal</td>
        <td>Ville</td>
        <td>Date de naissance</td>
        </tr>

    <?php
        foreach ($leEleve as $unEleve) {
            echo "<tr>
            <td>".$unEleve["prenomEleve"]."</td>
            <td>".$unEleve["nomEleve"]."</td>
            <td>".$unEleve["tel"]."</td>
            <td>".$unEleve["mail"]."</td>
            <td>".$unEleve["adresse"]."</td>
            <td>".$unEleve["cp"]."</td>
            <td>".$unEleve["ville"]."</td>
            <td>".$unEleve["d_naissance"]."</td>
            </tr>";
        }
    ?>

    </table>
</center> 