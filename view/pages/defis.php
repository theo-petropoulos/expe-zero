<section class="small">
    <?php foreach($content as $key => $value){?>
    <div class="pic"> <img src="/expe-zero/<?=$value['image_path'];?>">  
        <div class="poc">
            <h2 style="color:rgb(238, 209, 48);text-shadow:1px 0 black, 0 1px black, -1px 0 black, 0 -1px black">DEFI-<?=$value['numero'];?></h2>
            <h3 style="color:rgb(238, 209, 48);text-shadow:1px 0 black, 0 1px black, -1px 0 black, 0 -1px black"><?=$value['titre']?></h3>   
        </div>
    </div>
    <?php }?>
</section>