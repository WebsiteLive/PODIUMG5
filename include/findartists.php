<?php
   include 'dbcon.php';
?>
<section class="home-section">
      <div class="container">

        <h3 class="title">Artist's Page</h3>
  
        <div class="products-container">
  
           <?php
            if(!$con){
            header("Location: Ghost.html");
            }
            else{

               if(isset($_GET['type'])){                       
                  $query = "SELECT user_basicinfo.first_name,user_basicinfo.last_name,art_submission.*
                  FROM art_submission 
                  JOIN user_basicinfo on user_basicinfo.User_Id=art_submission.Creator_Id
                  WHERE post_type='Commision' AND item_type='$type' ORDER BY date_published DESC";
                  $result = odbc_exec($con,$query);
             
                     if(!empty($result)) {
                        while ($row = odbc_fetch_array($result)) {
                           $creatorid=$row['Creator_Id']; 
                           $id=$row['thread_Id'];    
                         $title=$row['item_title'];
                         $title=$row['item_title'];
                         $img_url=$row['item_imgurl'];
                         $caption=$row['post_caption'];
                         $name=$row['first_name']." ".$row['last_name'];
                         include 'items_commision.php';
                      
                        }
                     }
                  }
               else{
                  $query = "SELECT user_basicinfo.first_name,user_basicinfo.last_name,art_submission.*
                  FROM art_submission 
                  JOIN user_basicinfo on user_basicinfo.User_Id=art_submission.Creator_Id
                  WHERE post_type='Commision' ORDER BY date_published DESC";
                  $result = odbc_exec($con,$query);
             
                  if(!empty($result)) {
                      while ($row = odbc_fetch_array($result)) {
                        $creatorid=$row['Creator_Id']; 
                        $id=$row['thread_Id'];    
                      $title=$row['item_title'];
                      $title=$row['item_title'];
                      $img_url=$row['item_imgurl'];
                      $caption=$row['post_caption'];
                      $name=$row['first_name']." ".$row['last_name'];
                      include 'items_commision.php';
                      
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
               $query = "SELECT user_basicinfo.first_name,user_basicinfo.last_name,art_submission.*
               FROM art_submission 
               JOIN user_basicinfo on user_basicinfo.User_Id=art_submission.Creator_Id
               WHERE post_type='Commision' AND item_type='$type' ORDER BY date_published DESC";
               $result = odbc_exec($con,$query);
          
                  if(!empty($result)) {
                     while ($row = odbc_fetch_array($result)) {
                        $creatorid=$row['Creator_Id']; 
                        $id=$row['thread_Id'];    
                      $title=$row['item_title'];
                      $title=$row['item_title'];
                      $img_url=$row['item_imgurl'];
                      $caption=$row['post_caption'];
                      $name=$row['first_name']." ".$row['last_name'];
                     include 'previewitems_com.php';
                   
                     }
                  }
               }
            else{
               $query = "SELECT user_basicinfo.first_name,user_basicinfo.last_name,art_submission.*
                  FROM art_submission 
                  JOIN user_basicinfo on user_basicinfo.User_Id=art_submission.Creator_Id
                  WHERE post_type='Commision' ORDER BY date_published DESC";
                  $result = odbc_exec($con,$query);
          
               if(!empty($result)) {
                   while ($row = odbc_fetch_array($result)) {
                     $creatorid=$row['Creator_Id']; 
                        $id=$row['thread_Id'];    
                      $title=$row['item_title'];
                      $title=$row['item_title'];
                      $img_url=$row['item_imgurl'];
                      $caption=$row['post_caption'];
                      $name=$row['first_name']." ".$row['last_name'];
                   include 'previewitems_com.php';
                   
                  }
               }

            }
         }
       
       ?>
  
     </div>


  </section>