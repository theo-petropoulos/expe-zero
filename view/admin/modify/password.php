<form method="post" action="modify_password" class="article_form">
    <h3 class="h3_admin">Modification du mot de passe</h3>
    <label for="password">Nouveau mot de passe :</label>
    <input type="password" name="password" minlength=8 required>
    <label for="cpassword">Confirmez le mot de passe :</label>
    <input type="password" name="cpassword" minlegth=8 required>
    <input type="submit">
</form>

<?= $f3->get('success') !== null ? "<p class='success_message'>Mot de passe modifié avec succès.</p>" : null; ?>

<a href="./" class="back_button">Retour</a>