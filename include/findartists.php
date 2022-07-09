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
                  $query = "SELECT*FROM art_submission WHERE post_type='Sale' AND item_type='$type'ORDER BY date_published DESC";
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
               else{
                  $query = "SELECT*FROM art_submission WHERE post_type='Sale' ORDER BY date_published DESC";
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
  
       <?php 
       if(!$con){
         header("Location: Ghost.html");
         }
         else{

            if(isset($_GET['type'])){                       
               $query = "SELECT*FROM art_submission WHERE post_type='Sale' AND item_type='$type'ORDER BY date_published DESC";
                  $result = odbc_exec($con,$query);
          
                  if(!empty($result)) {
                     while ($row = odbc_fetch_array($result)) {
                     $id=$row['thread_Id'];    
                     $title=$row['item_title'];
                     $price=$row['price'];
                      $img_url=$row['item_imgurl'];
                     $desc=$row['post_description'];
                     include 'previewitems_sale.php';
                   
                     }
                  }
               }
            else{
               $query = "SELECT*FROM art_submission WHERE post_type='Sale' ORDER BY date_published DESC";
               $result = odbc_exec($con,$query);
          
               if(!empty($result)) {
                   while ($row = odbc_fetch_array($result)) {
                   $id=$row['thread_Id'];    
                   $title=$row['item_title'];
                   $price=$row['price'];
                   $img_url=$row['item_imgurl'];
                   $desc=$row['post_description'];
                   include 'previewitems_sale.php';
                   
                  }
               }

            }
         }
       
       ?>
  
     </div>


  </section>