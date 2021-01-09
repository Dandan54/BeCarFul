<h2>Ajouter un cours</h2>

<form method="post" action="">
Nom : <input type="text" name="nom" value="<?php echo ($laClasseEdit != null) ? $laClasseEdit['nom'] : ''; ?>"><br>
Salle : <input type="text" name="salle" value="<?php echo ($laClasseEdit != null) ? $laClasseEdit['salle'] : ''; ?>"><br>
Diplome : <input type="text" name="diplome" value="<?php echo ($laClasseEdit != null) ? $laClasseEdit['diplome'] : ''; ?>"><br>
<input type="hidden" name="idclasse" value="<?php echo ($laClasseEdit != null) ? $laClasseEdit['idclasse'] : ''; ?>">
<input type="submit" <?php echo ($laClasseEdit != null) ? 'name="modifier" value="Modifier"' : ''; ?>  name="valider" value="Valider">
</form>