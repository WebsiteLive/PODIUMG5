<?php
   session_start();

  
    $type=$_GET['type'];
  
    
    

?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="css/browse.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="image/Podium.png" alt="" class="icon">
        <div class="logo_name"><a href="index.php" style="color: white;">&nbsp; &nbsp;PODIUM</a></div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="browse.php">
            <i class="fa-solid fa-house"></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="#">
         <i class="fa-solid fa-user-pen"></i>
         <span class="links_name">Account</span>
       </a>
       <span class="tooltip">Account</span>
     </li>
     <li>
       <a href="browse.php?view=Freelancer">
         <i class="fa-solid fa-magnifying-glass"></i>
         <span class="links_name">Find an Artist</span>
       </a>
       <span class="tooltip">Find an Artist</span>
     </li>
     <li>
        <a href="#">
            <i class="fa-solid fa-user-tie"></i>
          <span class="links_name">Be a Freelancer</span>
        </a>
        <span class="tooltip">Be a Freelancer</span>
      </li>
     <li>
        <br>
        <br>
        <br>
        <br>
        <div class="logo-details">
              <div class="logo_name" style="padding-left: 2.5rem;"> CATEGORIES</div>
          </div>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">All Items</span>
       </a>
       <span class="tooltip">All Items</span>
     </li>
     <li>
       <a href="#">
        <i class="fa-solid fa-pencil"></i>
         <span class="links_name">Drawing</span>
       </a>
       <span class="tooltip">Pencil</span>
     </li>
     <li>
       <a href="#">
        <i class="fa-solid fa-paintbrush"></i>
         <span class="links_name">Painting</span>
       </a>
       <span class="tooltip">Painting</span>
     </li>
     <li>
       <a href="#">
        <i class="fa-solid fa-palette"></i>
         <span class="links_name">Digital Arts</span>
       </a>
       <span class="tooltip">Digital Arts</span>
     </li>
     <li class="profile">
        <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>

  <?php
   include 'include/findfreelancer.php';

   
   ?>

  <script src="js/browse.js" defer></script>
  <script type="text/javascript">
   let sidebar = document.querySelector(".sidebar");
   let closeBtn = document.querySelector("#btn");
   let searchBtn = document.querySelector(".bx-search");
 
   closeBtn.addEventListener("click", ()=>{
     sidebar.classList.toggle("open");
     menuBtnChange();//calling the function(optional)
   });
 
   searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
     sidebar.classList.toggle("open");
     menuBtnChange(); //calling the function(optional)
   });
 
   // following are the code to change sidebar button(optional)
   function menuBtnChange() {
    if(sidebar.classList.contains("open")){
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
    }else {
      closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
    }
   }
  </script>
</body>
</html>
