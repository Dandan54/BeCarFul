<center>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <p class="profiltitre">Ma Formule</p>
    <br>
    <table class="profiltable">

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