<section id="previous_articles">
    <?php if(!empty($content)){ ?>
        <?php foreach($content as $key => $article){?>
            <article class="previous_article" id="previous_article_<?=$article['id'];?>">
                <button class="delete_article">X</button>
                <img src="<?= URL . $article['image_path'];?>">
                <h6><?=$article['lien'];?></h6>
            </article>
        <?php } ?>
    <?php } ?>
</section>

<form enctype="multipart/form-data" method="post" action="modify_<?=$f3->get('item');?>" class="article_form">
    <label class="file_button">
        <input type="file" name="image" accept="image/*" required>
        Ajouter une image
    </label>
    <label for="image_name">Nom de l'image :</label>
    <input type="text" name="image_name" required>
    <label for="categorie">Catégorie :</label>
    <select name="categorie">
            <option value="NC-20">Non classifié</option>
            <option value="Télévision-1">Télévision</option>
            <option value="Radio-2">Radio</option>
            <option value="Presse-3">Presse</option>
            <option value="Magazine-4">Magazine</option>
            <option value="Réseaux-5">Réseaux</option>
            <option value="Sport-6">Sport</option>
            <option value="Podcast-7">Podcast</option>
            <option value="Blog-8">Blog</option>
    </select>
    <label for="lien">Lien :</label>
    <input type="text" name="lien" required>
    <input type="submit" value="Ajouter">
</form>

<?= $f3->get('success') !== null ? "<p class='success_message'>Article créé avec succès.</p>" : null; ?>

<a href="./" class="back_button">Retour</a>