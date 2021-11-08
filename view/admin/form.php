<?php

?>

<form method="post" action="admin">
    <label for="admlogin">Identifiant :</label>
    <input type="text" name="admlogin" required>
    <label for="admpassword">Mot de passe :</label>
    <input type="password" name="admpassword" minlength=8 required>
    <input type="submit" value="Connexion">
</form>