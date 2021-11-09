<form enctype="multipart/form-data" method="post" action="modify_<?=$f3->get('item');?>" class="article_form">
    <label class="file_button">
        <input type="file" name="image" accept="image/*" required>
        Ajouter une image
    </label>
    <label for="image_name">Nom de l'image :</label>
    <input type="text" name="image_name" required>
    <label for="numero">Numéro :</label>
    <input type="number" name="numero" value=0 required>
    <label for="titre">Titre :</label>
    <input type="text" name="titre" required>
    <label for="sous_titre">Sous-titre :</label>
    <input type="text" name="sous_titre" required>
    <input type="submit" value="Ajouter">
</form>

<?= $f3->get('success') !== null ? "<p class='success_message'>Article créé avec succès.</p>" : null; ?>

<section id="previous_articles">
    <?php if(!empty($content)){ ?>
        <?php foreach($content as $key => $article){?>
            <article class="previous_article" id="previous_article_<?=$article['id'];?>">
                <button class="delete_article">X</button>
                <img src="<?= URL . $article['image_path'];?>">
                <h4>Numéro <?=$article['numero'];?></h4>
                <h5><?=$article['titre'];?></h5>
                <h6><?=$article['sous_titre'];?></h6>
            </article>
        <?php } ?>
    <?php } ?>
</section>

<a href="./" class="back_button">Retour</a>