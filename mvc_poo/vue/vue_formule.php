<center>
    <br>
    <br>
    <hr>
    <br>
    <p>Ma Formule</p>
    <br>
    <table border="1">
        <tr>
        <td>Nom de la formule</td>
        <td>Prix</td>
        </tr>

    <?php
        foreach ($laFormule as $uneFormule) {
            echo "<tr>
            <td>".$uneFormule["libelle"]."</td>
            <td>".$uneFormule["prix"]."</td>
            </tr>";
        }
    ?>

    </table>
</center> 