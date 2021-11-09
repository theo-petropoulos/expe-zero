<section class="small">
<?php foreach($content as $key => $value){?>
<div class="pic"> <img src="/expe-zero/<?=$value['image_path'];?>">  
     <div class="poc">
          <h2>EXPE-<?=$value['numero'];?></h2>
          <h3><?=$value['titre']?></h3>   
     </div>
</div>
<?php }?>
</section>