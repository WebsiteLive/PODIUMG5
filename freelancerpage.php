<?php
   session_start();
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
        <img src="images/profile.jpg" alt="">
        <h3 class="name">Adrian Pulao</h3>
        <p class="position">Digital Artist</p>
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
        <h1>I'm <span>Adrian Pulao</span></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae explicabo cupiditate in aliquam assumenda, saepe necessitatibus dignissimos dolore molestias distinctio! Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
        <div class="logo">
            <img src="images/facebook.png" alt="" class="facebook">
            <img src="images/instagram.png" alt="" class="instagram">
        </div>
        </div>
    </section>
    <section id="about">
        <h2 class="aboutme">ABOUT ME</h2>
        <div class="container">
            
            <div class="home-about">
                    <h3><span>Name: </span>Adrian Pulao</h3>
                    <h3><span>Age: </span>20</h3>
                    <h3><span>Qualification: </span>BMS</h3>
                    <h3><span>Position: </span>Front End Web Developer</h3>
                    <h3><span>Language: </span>Tagalog/Englsih</h3>
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
                  <div class="price">$2.00</div>
               </div>
               <div class="product" data-name="p-1">
                  <img src="images/img1.jpg" alt="">
                  <h3><i> Mona Lisa</i></h3>
                  <div class="artist">Camille Gudio</div>
                  <div class="price">$2.00</div>
               </div>
               <div class="product" data-name="p-1">
                  <img src="images/img1.jpg" alt="">
                  <h3><i> Mona Lisa</i></h3>
                  <div class="artist">Camille Gudio</div>
                  <div class="price">$2.00</div>
               </div>
               <div class="product" data-name="p-1">
                  <img src="images/img1.jpg" alt="">
                  <h3><i> Mona Lisa</i></h3>
                  <div class="artist">Camille Gudio</div>
                  <div class="price">$2.00</div>
               </div>
               <div class="product" data-name="p-1">
                  <img src="images/img1.jpg" alt="">
                  <h3><i> Mona Lisa</i></h3>
                  <div class="artist">Camille Gudio</div>
                  <div class="price">$2.00</div>
               </div>
               <div class="product" data-name="p-1">
                  <img src="images/img1.jpg" alt="">
                  <h3><i> Mona Lisa</i></h3>
                  <div class="artist">Camille Gudio</div>
                  <div class="price">$2.00</div>
               </div>
               <div class="product" data-name="p-1">
                  <img src="images/img1.jpg" alt="">
                  <h3><i> Mona Lisa</i></h3>
                  <div class="artist">Camille Gudio</div>
                  <div class="price">$2.00</div>
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
            <center><a href="" class="see-more">See More</a></center>
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
                           <div class="custom_select" name="item_type"required>
                             <select required>
                               <option value="">Select</option>
                               <option value="male">Drawing</option>
                               <option value="female">Painting</option>
                               <option value="female">Digital Art</option>
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
                        <textarea id="my-text" rows="5" class="textarea" name="desc" required></textarea>
                        <p id="result"></p>
                        <label>Price</label>
                           <input type="number" class="input" placeholder="₱" name="Price"required>
                        </div>
                        

                        <div class="inputfield" id="forcommision">
                        <label>Caption</label>
                        <textarea id="my-text" rows="5" class="textarea" name="Caption"required></textarea>
                        
                        </div>
                        <p id="result"></p>
                        <br>

                        <center><input type="file" class="upload-box" required></center>
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
                          document.getElementById("forcommision").style.display="block";
                          
                       }
                    }
                 </script>
            
       
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/freelancer.js"></script>
</body>
</html>