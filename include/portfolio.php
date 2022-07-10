<?php
   include 'dbcon.php';

?>
<section class="home-section">
      <div class="container">

        <h3 class="title">PORTFOLIO</h3>
  
        <div class="products-container">
  
           <?php
            if(!$con){
            header("Location: Ghost.html");
            }
            else{

               if(isset($_GET['id'])){ 
                  $id=$_GET['id'];                      
                  $query = "SELECT*FROM art_submission WHERE  Creator_Id='$id'ORDER BY date_published DESC";
                     $result = odbc_exec($con,$query);
             
                     if(!empty($result)) {
                        while ($row = odbc_fetch_array($result)) {
                        $id=$row['thread_Id'];    
                        $title=$row['item_title'];
                        $price=$row['price'];
                         $img_url=$row['item_imgurl'];
                        $desc=$row['post_description'];
                        include 'items_portfolio.php';
                      
                        }
                     }
                  } 
            }
           ?>
  
        </div>
  
     </div>
  
     <div class="products-preview">
  
       <?php 
       if(!$con){
         header("Location: Error.php");
         }
         else{

            if(isset($_GET['id'])){ 
               $id=$_GET['id'];                      
               $query = "SELECT*FROM art_submission WHERE  Creator_Id='$id'ORDER BY date_published DESC";
                  $result = odbc_exec($con,$query);
          
                  if(!empty($result)) {
                     while ($row = odbc_fetch_array($result)) {
                     $id=$row['thread_Id'];    
                     $title=$row['item_title'];
                     $price=$row['price'];
                      $img_url=$row['item_imgurl'];
                     $desc=$row['post_description'];
                     include 'previewitems_portfolio.php';
                   
                     }
                  }
               } 
         }
       
       ?>
  
     </div>


  </section>