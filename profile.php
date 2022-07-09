<?php
    session_start();
    include 'getimgurl.php';
    include 'dbcon.php';
    $id=$_SESSION['User_Id'];
    $jd=$_POST['Job_Description'];
    $fb=$_POST['fburl'];
    $ig=$_POST['igurl'];
    $lang=$_POST['language'];
    $li=$_POST['LIurl'];
    $intro=$_POST['selfintro'];

   

    if(!$con){
        header("Location: Ghost.html");
    }
    else{
        $query = "INSERT INTO [dbo].[user_profile]
        (User_Id,Profile_img,job_desc,language,fb_url,ig_url,linkedin_url,self_description)
        VALUES('$id','$img_upload_path','$jd','$lang','$fb','$ig','$li','$intro')";
        $result = odbc_exec($con,$query);

        $query2 ="UPDATE user_type
        SET  user_type = 'Freelancer'
        WHERE User_Id='$id'";
        $result = odbc_exec($con,$query2);
        
        header("Location: gallerymarketpage_new.php");
    }
     


    
?>