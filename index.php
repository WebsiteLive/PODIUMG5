<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Bootstrap file link-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!--JavaScript online link-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!--customized css file link-->
	<link rel="stylesheet" type="text/css" href="css/index.css"> 
	<!--fontawesome file link-->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!--Online link for text animation-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<title>HOME</title>
    
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/podium.png" alt="" class="podium">
            <h2>PODIUM</h2>
        </div>

        <div class="navigation">
            <input type="checkbox" id="nav-checkbox">
            <label for="nav-checkbox" class="nav-toggle">
                <img src="img/open.png" alt="open menu" class="open">
                <img src="img/close.png" alt="close menu" class="close">
            </label>

            <ul class="nav-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <?php 
                    if(isset($_SESSION['User_Id'])){
                        echo '<li><a href="browse.php">Browse</a></li>';
                    }
                    else{
                        echo '<li><button onclick="togglePopup()" class="first-button" style="color: black;">LOGIN</button></li>';
                    }
                ?>
                
                <div class="popup" id="popup-1">
                    <form action="login.php" method="post">
                        <div class="content">
                                <div class="close-btn" onclick="togglePopup()" style="cursor: pointer;"><img src="img/close.png" alt=""></div> 
                            <h1 class="login-modal">LOGIN</h1> 
                       
                            <?php if(isset($_GET['em'])):?>
                                    <p><?php echo $_GET['em']?>
                                    
                            <?php endif?>
                                    
                       
                            <div class="input-field"><input placeholder="Email" class="validate" name="email" required></div>
                            <div class="input-field"><input type="password" placeholder="Password" class="validate" name="password" required></div>
                                <button class="second-button">Login</button>
                                <p>Don't have an account? <a onclick="myFunction()">Sign Up</a></p>   
                        </div>             
                     </form>
                </div>

                <div class="sipopup" id="sipopup-1">
                    <form action="signup.php" method="post">
                        <div class="content">
                            <div class="close-btn" onclick="myFunction()" style="cursor: pointer;"><img src="img/close.png" alt=""></div>

                            <h1 class="signup-modal">SIGN UP</h1> 
                            
                            <form action="signup.php" method="post">
                                <div class="form-row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="card-signup">
                                            <div class="card-body">
                                                <div class="col-md-12 mb-3">
                                                    <label for="email">Email address</label>
                                                    <input name="email"type="text" class="form-control" id="validationDefault01" placeholder="juandelacruz@hotmail.com"required>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="validationDefaultUsername">Username</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="juandc" aria-describedby="inputGroupPrepend3" required>    
                                                    </div>    
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="validationDefault02">Password</label>
                                                    <input type="password" class="form-control" id="validationDefault02" required> 
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="validationDefault03"> Confirm Password</label>
                                                    <input type="password" class="form-control" id="validationDefault03" required> 
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="card-signup">
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationDefault04">First Name</label>
                                                        <input type="text" class="form-control" id="validationDefault04" placeholder="Juan Miguel"  required> 
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationDefault05"> Middle Name</label>
                                                        <input type="text" class="form-control" id="validationDefault05" placeholder="Luna"  required> 
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationDefault06">Last Name</label>
                                                        <input type="text" class="form-control" id="validationDefault06" placeholder="Dela Cruz"  required> 
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationDefault07"> Name Ext.</label>
                                                        <input type="text" class="form-control" id="validationDefault07" placeholder="jr."> 
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationDefault08">Address</label>
                                                        <input type="text" class="form-control" id="validationDefault08" placeholder="Malolos, Bulacan"  required> 
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="bday">Date of Birth:</label>
                                                        <input type="date" class="form-control" id="form_input" name="bday"required>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="signup-button" value="SIGNUP"> 
                            </form>
                        </div>
                    </form>
                </div>
            </ul>
        </div>
    </header>

	<!--IMAGE SLIDER-->
	<div id="carouselExampleIndicators" class="carousel slide image-carousel" data-ride="carousel">
	    <ol class="carousel-indicators">
	    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	   		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
	    <div class="carousel-inner">
	    	<div class="carousel-item active">
	        	<img class="d-block w-100 image-carousel" src="img/m.jpg" alt="PODIUM">
	        	<div class="carousel-caption d-md-block text" style="color: #65453A;">
				    <h5 class="animate__animated animate__slideInUp text">PODIUM: Artist Freelancing Website</h5>
				    <p class="animate__animated animate__slideInUp"><i>"Every artist was first an amateur."</i></p>
				    <p class="animate__animated animate__slideInUp">&nbsp;&nbsp;&ndash; Ralph Waldo Emerson</p>
				    <!--&nbsp; = space, &ndash; = en dash "-" -->
				</div>
	    	</div>
		    <div class="carousel-item">
		        <img class="d-block w-100 image-carousel" src="img/2ndpic.jpg" alt="2nd Slide">
		        <div class="carousel-caption d-md-block">
				    <h5 class="text">DREAM BIG AND LET YOUR ART SHINE</h5>
					<?php
					if(isset($_SESSION['User_Id'])){
						
						
					}
					else{
						echo '<p><a href="signup.php">Join Us Now!</a></p>';
					}
				    ?>
				    
				</div>
		    </div>
		    <div class="carousel-item">
		        <img class="d-block w-100 image-carousel" src="img/wall.jpg" alt="ARTS">
		        <div class="carousel-caption d-md-block">
				   <h5 class="animate__animated animate__backInRight text">DREAM BIG AND LET YOUR ART SHINE</h5>
				   <p class="animate__animated animate__backInLeft" id="cap">Become an explorer in a world full of arts, join us now for free to experience the first artist platform in the Philippines.</p>
				</div>
		    </div>
	  	</div>
	</div>

    <section class="services" id="services">
        <div class="container-fluid">
            <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Services</span></h1>
            <hr class="mx-auto mb-5 w-25">
            <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <!-- card starts here -->
                    <div class="card shadow">
                        <img src="img/Painting.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="text-center">Painting</h3>
                            <hr class="mx-auto w-75">
                            <p>
                                Podium is a Website where you can find top notch quality Drawings illustrated by different artist all around the Philippines.
                            </p>
                        </div>
                    </div>
                    <!-- card ends here -->
                </div>
                <!-- col ends here -->
                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <!-- card starts here -->
                    <div class="card shadow">
                        <img src="img/Drawing.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="text-center">Drawing</h3>
                            <hr class="mx-auto w-75">
                            <p>
                                Over the course of years many aspiring artist wants to showcase their talents in Painting, here in Podium we served as a bridge for artists and the people who appreciate arts
                            </p>
                        </div>
                    </div>
                    <!-- card ends here -->
                </div>
                <!-- col ends here -->
                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <!-- card starts here -->
                    <div class="card shadow">
                        <img src="img/Digital Arts.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="text-center">Digital Arts</h3>
                            <hr class="mx-auto w-75">
                            <p>
                                In today's generation, technology has become a part of human lives thus it influence the form of presenting art merging it with technology.
                            </p>
                        </div>
                    </div>
                    <!-- card ends here -->
                </div>
                <!-- col ends here -->
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="wrapper-about">

            <div class="background-container">
                <div class="bg-1"></div>
                <div class="bg-2"></div>
        
            </div>
            <div class="about-container">
                
                <div class="image-container">
                    <img src="img/about.jpg" alt="">
                    
                </div>
    
                <div class="text-container">
                    <h1 class="about-header">DREAM BIG AND LET YOUR ART SHINE!</h1>
                    <p class="about-paragraph">Podium: Artists Freelancing Websites were built to benefit artists and who are in need of art services without face to face interactions. This will be a safe and convenient art freelancing website. For people who wants to explore the world full of arts and wants to look for commissions. First enter your email and click GET STARTED.</p>
                </div>
                
            </div>
        </div>
    </section>
    <section class="contact" id="contact" style="background: url(img/contact.jpg); background-size: cover;">
                <form action="" class="form-color">
            <div class="title">
              <h2>CONNECT WITH US.</h2>
            </div>
            <div class="half">
              <div class="item">
                <label for="name">NAME</label>
                <input type="text" id = "name">
              </div>
              <div class="item">
                <label for="email">EMAIL</label>
                <input type="text" id = "email">
              </div>
            </div>
            <div class="full">
              <label for="message">MESSAGE</label>
              <textarea name="" id = "message"></textarea>
            </div>
            <div class="action">
              <input type="submit" value = "SEND MESSAGE">
              <input type="reset" value = "RESET" class="reset">
            </div>
            <div class="wrapper">
                <div class="icon facebook">
                   <div class="tooltip">
                      Facebook
                   </div>
                   <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                </div>
                <div class="icon twitter">
                   <div class="tooltip">
                      Twitter
                   </div>
                   <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                </div>
                <div class="icon instagram">
                   <div class="tooltip">
                      Instagram
                   </div>
                   <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                </div>
             </div>
          </form>
        
    </section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Drawing</a></li>
                            <li><a href="#">Painting</a></li>
                            <li><a href="#">Digital Arts</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="#contact">CONTACT</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 item ">
                        <h3>PODIUM</h3>
                        <p style="margin: 0; padding:0 0 3rem 0;">
                        Podium: Artists Freelancing Websites were built to benefit artists and who are in need of art services without face to face interactions. This will be a safe and convenient art freelancing website. For people who wants to explore the world full of arts and wants to look for commissions. First enter your email and click GET STARTED.</p>
                    </div>
                    <div class="col item social">
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                        <a href="#"><i class="icon ion-social-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
                <p class="copyright">Copyright© 2022 PODIUM. All rights reserved.</p>
            </div>
        </footer>
    </div>
    <script src="js/index.js"></script>
    
<script type="text/javascript">
    $(document).ready(function(){
    $(window).bind('scroll', function(){
        var gap = 50;
        if($(window).scrollTop()> gap){
            $('header').addClass('active-navigation');
        } else{
            $('header').removeClass('active-navigation');
        }
    });
});
</script>

</body>
</html>