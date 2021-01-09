<h2>Ajouter un prof</h2>

<form method="post" action="">
Nom : <input type="text" name="nom" value="<?php echo ($leProfEdit != null) ? $leProfEdit['nom'] : ''; ?>"><br>
Prénom : <input type="text" name="prenom" value="<?php echo ($leProfEdit != null) ? $leProfEdit['prenom'] : ''; ?>"><br>
Date d'entrée : <input type="text" name="dateentree" value="<?php echo ($leProfEdit != null) ? $leProfEdit['dateentree'] : ''; ?>"><br>
<input type="hidden" name="idprof" value="<?php echo ($leProfEdit != null) ? $leProfEdit['idprof'] : ''; ?>">
<input type="submit" <?php echo ($leProfEdit != null) ? 'name="modifier" value="Modifier"' : ''; ?>  name="valider" value="Valider">
</form>