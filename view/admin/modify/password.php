<form method="post" action="modify_password">
    <label for="password">Nouveau mot de passe :</label>
    <input type="password" name="password" minlength=8 required>
    <label for="cpassword">Confirmez le mot de passe :</label>
    <input type="password" name="cpassword" minlegth=8 required>
    <input type="submit">
</form>

<?= $f3->get('success') !== null ? "Mot de passe modifié avec succès." : null; ?>

<a href="./">Retour</a>