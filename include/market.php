<?php
   include 'dbcon.php';
?>
<section class="home-section">
      <div class="container">

        <h3 class="title">GALLERY MARKET PAGE</h3>
  
        <div class="products-container">
  
           <?php
            if(!$con){
            header("Location: Ghost.html");
            }
            else{

               if(isset($_GET['type'])){
                  $type=$_GET['type'];
                
                  if($type == "Digital"){
                     $query = "SELECT*FROM art_submission WHERE post_type='Sale'AND item_type='Digital Art'";
                     $result = odbc_exec($con,$query);
                  }

               }
               else{
                  $query = "SELECT*FROM art_submission WHERE post_type='Sale'";
                  $result = odbc_exec($con,$query);
             
                  if(!empty($result)) {
                      while ($row = odbc_fetch_array($result)) {
                      $id=$row['thread_Id'];    
                      $title=$row['item_title'];
                      $price=$row['price'];
                      $img_url=$row['item_imgurl'];
                      $desc=$row['post_description'];
                      include 'items.php';
                      
                     }
                  }

               }
            }
               
               
           ?>
  
        </div>
  
     </div>
  
     <div class="products-preview">
  
        <div class="preview" data-target="p-1">
           <i class="fas fa-times"></i>
           <img src="image/Painting.jpg" alt="">
           <h3>Mona Lisa</h3>
           
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">$2.00</div>
           <center>           
            <div class="buttons">
              <a href="" class="description">Go to Description Page</a>
           </div>
        </center>

        </div>
  
     </div>


  </section>