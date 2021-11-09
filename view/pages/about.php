<section id="about_gallery">
    <img class='carousel_picture' id='carousel_picture_1' src="/expe-zero/assets/images/autres/Panorama1.jpg">
    <img class='carousel_picture' id='carousel_picture_2' src="/expe-zero/assets/images/autres/Panorama2.jpg"> -->
    <img class='carousel_picture' id='carousel_picture_3' src="/expe-zero/assets/images/autres/Panorama3.jpg">
    <img class='carousel_picture' id='carousel_picture_4' src="/expe-zero/assets/images/autres/Panorama4.jpg">
    <img class='carousel_picture' id='carousel_picture_5' src="/expe-zero/assets/images/autres/Panorama5.jpg">
    <h2>Qui suis-je ?</h2>
</section>

<section id="about_bio">
<iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fbrutofficiel%2Fvideos%2F356505142932514%2F&show_text=false&width=267&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
    <p>
        Je m'appelle <strong>Benjamin de Molliens</strong>, j'ai 34 ans, j'habite à <strong>Marseille</strong> et je suis
        originaire de Bretagne. Diplômé de l'ICAM Lille et l'ESSEC Business School,
        j'ai  passé  5  années  à  l'international  dans  le  digital.  J'ai  ensuite  co-fondé
        <strong>Plastic Odyssey</strong> en 2017, une expédition maritime autour du monde pour
        lutter contre la <strong>pollution plastique de l'océan</strong>. Fin 2019, j'ai quitté le projet
        puis lancé en mai 2020 <strong>Expedition Zero</strong>, avec un premier voyage à vélo.<br><br>
        Fervent défenseur de l'environnement, féru de sport en pleine nature et formé à l'art oratoire, 
        j'ai souhaité rassembler dans un seul et même projet mes 3 piliers de vie que sont <strong>l'aventure sportive</strong>, 
        la <strong>communication</strong> et la <strong>protection de l'environnement</strong>.
    </p>
</section>

<section id="about_bio2">
    <p>
        Avec <strong>Expedition Zero</strong>, je mets les deux premiers piliers au service du troisième. Ma communication se veut <strong>positive</strong> et 
        <strong>bienveillante</strong> pour donner envie d'agir. Je cherche aussi à montrer que la sobriété, dans le voyage ou dans son quotidien, 
        rend réellement <strong>heureux</strong>.<br><br>    
        Enfin, à travers mes <strong>trois Zéro</strong> je mets en lumière les limites et dangers de la <strong>surconsommation</strong>, 
        de l'<strong>économie linéaire</strong> (produire, consommer, jeter) fondée sur une croissance infinie dans un monde fini, 
        enfin de la forte dépendance de notre société aux <strong>énergies carbonées</strong>, véritables bombes climatiques.
    </p>
    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Flaprovence%2Fvideos%2F400241557766403%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
</section>

<a href="contact" class="contact_button">Me contacter</a>

<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Flaprovence%2Fvideos%2F400241557766403%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

<span class="separator"></span>

<h2>Ils en parlent</h2>
<section id="about_medias">
    <?php foreach($content['medias'] as $key => $value){?>
        <a href="<?=$value['lien'];?>" class="media_link" id="media_<?=$value['image_name'];?>">
            <img src="/expe-zero/<?=$value['image_path'];?>"> 
        </a>
    <?php } ?>
</section>

<h2>Les partenaires</h2>
<section id="about_partenaires">
    <?php foreach($content['partenaires'] as $key => $value){?>
        <img src="/expe-zero/<?=$value['image_path'];?>" class="image_partenaire"> 
    <?php } ?>
</section>