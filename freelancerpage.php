<?php
   session_start();
   include 'dbcon.php';

   $id=$_GET['userid'];
   $currentuser=$_SESSION['User_Id'];
   
   if(!$con){
      header("Location: Error.php");
  }
  else{
     $query = "SELECT user_basicinfo.User_Id,user_profile.Profile_img,user_profile.job_desc,user_profile.language,user_profile.fb_url,user_profile.ig_url
     ,user_profile.self_description, user_basicinfo.first_name,user_basicinfo.first_name,user_basicinfo.last_name,user_basicinfo.user_birthdate
     FROM user_profile
     JOIN user_basicinfo ON user_profile.User_Id=user_basicinfo.User_Id WHERE user_basicinfo.User_Id='$id'";
     $result = odbc_exec($con,$query);
     while ($row = odbc_fetch_array($result)) {
      $img=$row['Profile_img'];
      $intro=$row['self_description'];
      $jd=$row['job_desc'];
      $lang=$row['language'];
      $bday=$row['user_birthdate'];
      $now = date_create()->format('Y-m-d');
      $name=$row['first_name']." ".$row['last_name'];

      /*
      $age = $bday - $now;
   */

     }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/freelancer.css">
    <title>Freelancer Page</title>
</head>
<body>
    <header>
    <div class="user">
        <img src="<?php echo $img?>" alt="">
        <h3 class="name"><?php echo $name?></h3>
        <p class="position"><?php echo $jd?></p>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="browse.php">Back</a></li>
            <li><a href="#log-out">Logout</a></li>
        </ul>
    </nav>
    </header>
    <div id="menu" class="fas fa-bars"></div>

    <section class="home" id="home">
        <div class="description">
        <h3>HI THERE!</h3>
        <h1>I'm <span><?php echo $name?></span></h1>
        <p><?php echo $intro?></p>
        <div class="logo">
            <a href=""><img src="images/facebook.png" alt="" class="facebook"></a>
            <a href=""><img src="images/instagram.png" alt="" class="instagram"></a>
        </div>
        </div>
    </section>
    <section id="about">
        <h2 class="aboutme">ABOUT ME</h2>
        <div class="container">
            
            <div class="home-about">
                    <h3><span>Name: </span><?php echo $name?></h3>
                    <h3><span>Age: </span>21</h3>
                    <h3><span>Position: </span><?php echo $jd?></h3>
                    <h3><span>Language: </span><?php echo $lang?></h3>
            </div>
        </div>
    </section>
    <section class="market" id="portfolio">
        <div class="box-container">

            <h3 class="title"> My Portfolio </h3>
      
            <div class="products-container">
      
               <div class="product" data-name="p-1">
                  <img src="images/img1.jpg" alt="">
                  <h3><i> Mona Lisa</i></h3>
                  <div class="artist">Camille Gudio</div>
                  <div class="price">₱2.00</div>
               </div>
               
      
               <div class="product" data-name="p-2">
                  <img src="images/dibil.png" alt="">
                  <h3>Upload File</h3>
               </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center><a href="<?php echo "browse.php?view=Portfolio&id=". $id?>" class="see-more">See More</a></center>
         </div>
         <div class="products-preview">
      
            <div class="preview" data-target="p-1">
               <i class="fas fa-times"></i>
               <img src="images/img1.jpg" alt="">
               <h3>Mona Lisa</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
               <p>Painting</p>
               <p>Dimension: 24x30</p>
               <div class="price">$2.00</div>
            </div>
            <div class="preview" data-target="p-2">
                <i class="fas fa-times"></i>
                <form action="add_items.php" enctype="multipart/form-data" method="post" class="upload"
                   style="display: block;">
                   <div class="wrapper">
                     <div class="title">
                       Create Post
                     </div>
                     <div class="form">
                         <div class="inputfield">
                           <label>Type</label>
                           <div class="custom_select" required>
                             <select name="item_type" required>
                               <option value="" disable selected>Select</option>
                               <option value="Drawing">Drawing</option>
                               <option value="Painting">Painting</option>
                               <option value="Digital Art">Digital Art</option>
                             </select>
                           </div>
                        </div> 
                         <div class="inputfield">
                           <label>Title</label>
                           <input type="text" class="input" name="title"required>
                        </div> 
                       <div class="inputfield">
                           <label>Dimension</label>
                           <input type="text" class="input" name="dimension" required>
                        </div> 
                       <div class="inputfield" id="forsale">
                        <label>Description</label>
                        <textarea  id="my-text" rows="5" class="textarea" name="desc" ></textarea>
                        <p id="result"></p>
                        <label>Price</label>
                           <input type="number" class="input" placeholder="₱" name="Price">
                        </div>
                        

                        <div class="inputfield" id="forcommision">
                        <label>Caption</label>
                        <textarea id="my-text" rows="5" class="textarea" name="Caption"></textarea>
                        
                        </div>
                        <p id="result"></p>
                        <br>

                        <center><input type="file" class="upload-box" name="imgfile"required></center>
                        <div class="radio-section" required>

                           <div class="radio-list">
                               <div class="radio-item">
                                   <input type="radio" name="radio" id="radio1" value="Commision" onchange="rdbtnchange()">
                                 
                                   <label for="radio1">For Commission</label>
                               </div>
                               <div class="radio-item">
                                   <input type="radio" name="radio" id="radio2" value="Sale" onchange="rdbtnchange()">
                                   <label for="radio2">For Sale</label>
                               </div>
                           </div>
                        </div>
                       <div class="inputfield terms">
                           <label class="check">
                             <input type="checkbox" required>
                             <span class="checkmark"></span>
                           </label>
                           <p>Agreed to terms and conditions</p>
                        </div> 
                       <div class="inputfield">
                         <input type="submit" value="Submit" class="btn">
                       </div>
                     </div>
                 </div>
               </form>
            </div> 
         </div> 
                <script>
                    function rdbtnchange(){
                       let rdvalue = document.querySelectorAll("input[name='radio']:checked")[0].value;
                       console.log(rdvalue);
     
                       if(rdvalue == "Sale"){
                          document.getElementById("forsale").style.display="block";
                          document.getElementById("forcommision").style.display="none";
                       }
                       else if(rdvalue == "Commision"){
                           document.getElementById("forsale").style.display="none";
                          document.getElementById("forcommision").style.display="flex";
                          
                       }
                    }
                 </script>
            
       
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/freelancer.js"></script>
</body>
</html>