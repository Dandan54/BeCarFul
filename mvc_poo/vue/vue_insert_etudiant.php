<h2>Ajouter un Etudiant</h2>

<form method="post" action="">
Nom : <input type="text" name="nom" value="<?php echo ($etudiantEdit != null) ? $etudiantEdit['nom'] : ''; ?>"><br>
Prénom : <input type="text" name="prenom" value="<?php echo ($etudiantEdit != null) ? $etudiantEdit['prenom'] : ''; ?>"><br>
Adresse : <input type="text" name="adresse" value="<?php echo ($etudiantEdit != null) ? $etudiantEdit['adresse'] : ''; ?>"><br>
<input type="hidden" name="idetudiant" value="<?php echo ($etudiantEdit != null) ? $etudiantEdit['idetudiant'] : ''; ?>">
<input type="submit" <?php echo ($etudiantEdit != null) ? 'name="modifier" value="Modifier"' : ''; ?>  name="valider" value="Valider">
</form>