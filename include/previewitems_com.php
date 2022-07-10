<div class="preview" data-target="<?php echo $id?>">
           <i class="fas fa-times"></i>
           <img src="<?php echo $img_url?>" alt="">
           <h3><?php echo $title?></h3>
           
           <p><?php echo $name?>.</p>
           <div class="price"><?php echo $caption?></div>
           <center>           
            <div class="buttons">
              <a href="descriptionofArt.php?threadid=<?php ECHO $id?>" class="description">Go to Description Page</a>
              <a href="freelancerpage.php?userid=<?php ECHO $creatorid?>" class="description">Go to Artists Page</a>
           </div>
        </center>

</div>