<form enctype="multipart/form-data" method="post" action="modify_<?=$f3->get('item');?>" class="article_form">
    <label class="file_button">
        <input type="file" name="image" accept="image/*" required>
        Ajouter une image
    </label>
    <label for="image_name">Nom de l'image :</label>
    <input type="text" name="image_name" required>
    <input type="submit" value="Ajouter">
</form>

<?= $f3->get('success') !== null ? "<p class='success_message'>Partenaire ajouté avec succès.</p>" : null; ?>

<section id="previous_articles">
    <?php if(!empty($content)){ ?>
        <?php foreach($content as $key => $article){?>
            <article class="previous_article" id="previous_article_<?=$article['id'];?>">
                <button class="delete_article">X</button>
                <img src="<?= URL . $article['image_path'];?>">
                <h6><?=$article['image_name'];?></h6>
            </article>
        <?php } ?>
    <?php } ?>
</section>

<a href="./" class="back_button">Retour</a>