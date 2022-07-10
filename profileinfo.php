<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profileinfo.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Personal Information</title>
</head>
<body>
    <!--CONTAINER-->
    <div class="container-fluid" style="max-width: 50rem; margin-bottom: 1rem;">
        <div class="card">
            <div class="card-header" style="background-color:#333;">
            <br>
            Personal Information
            <p class="font">Tell us a bit about yourself. This Information will appear on your profile, so that potential buyers can get to know you better.

            </p>
            </div>
            <div class="card-body text-center" style="background-color: #444;">
               
               
                

                <!--FORM-->
                <form action="profile.php" enctype="multipart/form-data" method="post">
                <center>
                <div class="profile-pic-div">
                    <img src="img/yoshihara-motoki-art.jpg" id="photo">
                    <input type="file" id="file" name="imgfile" required>
                    <label for="file" id="uploadBtn">Choose Photo</label>
                </div>
                </center>
                    <div class="form-row" style="padding-left: 3rem;">
                        
                    </div>
                    <br>
                    <div class="input-group" style="padding-left: 3rem;">
                        <textarea name= "selfintro" class="form-control" style="max-width: 39.5rem;" aria-label="With textarea" placeholder="Bio" required></textarea>
                    </div>
                    <br>
                    <div class="form-row" style="padding-left: 3rem;">
                        <div class="col" style="max-width: 20rem;">
                            <input name= "language" type="text" class="custom-select my-1 mr-sm-2" placeholder="Languages" required>      
                        </div>
                        <div class="col" style="max-width: 20rem;">
                            <input name= "Job_Description" type="text" class="form-control" id="JobDesc" placeholder="Job Description" required>
                        </div>
                    </div>
                    <br>
                    <br>
                    <!--SOCMED LINKS-->
                    <h5 style="color: #fff;">Social Media Links</h5>
                    <div class="form-row" style="padding-left: 3rem;">
                        <div class="col" style="max-width: 20rem;">
                            <input name= "fburl" type="text" class="form-control" id="facebook" placeholder="Facebook" required>
                        </div>
                        <div class="col" style="max-width: 20rem;">
                            <input name= "igurl" type="text" class="form-control" id="instagram" placeholder="Instagram">
                        </div>
                    </div>
                <br>
                <br> 
                    <input class="btn btn-light text-dark" type="submit" value="Submit">
                </form>
                    <hr>
                <p class="card-text" style="padding-top: 1rem; color: #fff;">Copyright © 2022 PODIUM. All rights reserved.</p> 
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        let fileInput = document.getElementById("file-input");
        let imageContainer = document.getElementById("images");
        let numOfFiles = document.getElementById("num-of-files");

        function preview(){
            imageContainer.innerHTML = "";
            numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

            for(i of fileInput.files){
                let reader = new FileReader();
                let figure = document.createElement("figure");
                let figCap = document.createElement("figcaption");
                figCap.innerText = i.name;
                figure.appendChild(figCap);
                reader.onload=()=>{
                    let img = document.createElement("img");
                    img.setAttribute("src",reader.result);
                    figure.insertBefore(img,figCap);
                }
                imageContainer.appendChild(figure);
                reader.readAsDataURL(i);
            }
        }
    </script>
  
    <script type="text/javascript">
        //declearing html elements

        const imgDiv = document.querySelector('.profile-pic-div');
        const img = document.querySelector('#photo');
        const file = document.querySelector('#file');
        const uploadBtn = document.querySelector('#uploadBtn');

        //if user hover on img div 

        imgDiv.addEventListener('mouseenter', function(){
            uploadBtn.style.display = "block";
        });

        //if we hover out from img div

        imgDiv.addEventListener('mouseleave', function(){
            uploadBtn.style.display = "none";
        });


        file.addEventListener('change', function(){
            const choosedFile = this.files[0];

            if (choosedFile) {

                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener('load', function(){
                    img.setAttribute('src', reader.result);
                });

                reader.readAsDataURL(choosedFile);
            }
        });
    </script>

</body>
</html>