<section id="about_gallery">
    <img class='carousel_picture' id='carousel_picture_1' src="/expe-zero/assets/images/autres/Panorama1.jpg">
    <img class='carousel_picture' id='carousel_picture_2' src="/expe-zero/assets/images/autres/Panorama2.jpg"> -->
    <img class='carousel_picture' id='carousel_picture_3' src="/expe-zero/assets/images/autres/Panorama3.jpg">
    <img class='carousel_picture' id='carousel_picture_4' src="/expe-zero/assets/images/autres/Panorama4.jpg">
    <img class='carousel_picture' id='carousel_picture_5' src="/expe-zero/assets/images/autres/Panorama5.jpg">
    <h2>Qui suis-je ?</h2>
</section>

<section id="about_bio">
    <p>Je m'appelle Benjamin de Molliens, j'ai 34 ans, j'habite à Marseille et je suis
    originaire de Bretagne. Diplômé de l'ICAM Lille et l'ESSEC Business School,
    j'ai  passé  5  années  à  l'international  dans  le  digital.  J'ai  ensuite  co-fondé
    Plastic Odyssey en 2017, une expédition maritime autour du monde pour
    lutter contre la pollution plastique de l'océan. Fin 2019, j'ai quitté le projet
    puis lancé en mai 2020 Expedition Zero, avec un premier voyage à vélo.</p>
</section>

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